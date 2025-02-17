<?php

namespace App\Http\Controllers;

use App\Mail\ResetToken;
use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Support\Facades\Session;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;


class LoginController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
          
             // Rate limiting logic
    $key = 'login:' . $request->ip(); // Unique key based on the user's IP
    $maxAttempts = 5; // Max attempts
    $decaySeconds = 60; // Lockout duration in seconds

    if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
        return response()->json([
            'message' => 'Too many login attempts. Try again in ' . RateLimiter::availableIn($key) . ' seconds.',
        ], 429);
    }
            //process validation here
            $credentials = array(
                "email" => $request->email,
                "password" => $request->password,
            );

            $user = Sentinel::authenticate($credentials);

            if ($user) {

                if ($user->inRole('business')) {
                    return redirect('dashboard/business');
                }
                if ($user->inRole('consumer')) {
                    // return Session::get('rating_input');
                    // return redirect('consumer/evaluate/company');
                    // $data = array(
                    //     'rating_input'=> Session::get('rating_input'),
                    //     'product_id'=> Session::get('product_id'),
                    //     'review_input'=> Session::get('review_input'),
                    // );



                    if (Session::get('type') == 'business') {
                        return redirect('consumer/business/write-review/' . Session::get('company_id'));
                    }
                    if (Session::get('type') == 'product') {
                        return redirect('consumer/product/write-review/' . Session::get('product_id'));
                    }
                    if (Session::get('type') == 'service') {
                        return redirect('consumer/service/write-review/' . Session::get('service_id'));
                    }
                }
                return redirect('dashboard');
            } else {
                //return back
                //                flash('Invalid email or password.')->error();
                //return back
                RateLimiter::hit($key, $decaySeconds);
                Session::flash('error', 'Invalid username or password!');
                return redirect()->back()->withInput();
            }
        }
    }

    public function dashboard()
    {

        $businesses = Business::get();

        $consumers = User::whereHas('roles', function ($query) {
            $query->where('name', 'consumer');
        })->get();

        // $reviews = BusinessReview::get();

        $ratings = Business::select('total_rating')->get();

        $ratingsData = [
            'Very good' => $ratings->where('total_rating', 5)->count(),
            'Good' => $ratings->where('total_rating', 4)->count(),
            'Okay' => $ratings->where('total_rating', 3)->count(),
            'Bad' => $ratings->where('total_rating', 2)->count(),
            'Terrible' => $ratings->where('total_rating', 1)->count(),
        ];

        $reviews = BusinessReview::with('user')->get();

        $genderCounts = [
            'Male' => 0,
            'Female' => 0
        ];

        foreach ($reviews as $review) {
            if ($review->user->gender === 'male') {
                $genderCounts['Male']++;
            } elseif ($review->user->gender === 'female') {
                $genderCounts['Female']++;
            }
        }

        $totalReviews = array_sum($genderCounts);

       if ($totalReviews > 0) {
    $genderPercentages = [
        'Male' => ($genderCounts['Male'] / $totalReviews) * 100,
        'Female' => ($genderCounts['Female'] / $totalReviews) * 100
    ];
} else {
    $genderPercentages = [
        'Male' => 0,
        'Female' => 0
    ];
}


        $topCompanies = Business::where('total_rating', '>', 2)
            ->where('total_rating', '<=', 5)
            ->orderBy('total_rating', 'DESC')
            ->get();


         $chartData = Category::has('business')
            ->with(['business' => function ($query) {
                $query->where('display', 1)
                    ->where('total_rating', '>', 2) // Only businesses with rating greater than 2
                    ->orderBy('total_rating', 'desc');
            }])
            ->get()
            ->map(function ($category) {
                // Get the top business, if any
                $topBusiness = $category->business->first();

                return [
                    'name' => $topBusiness ? $topBusiness->business_name : $category->category_name, // Business name or category name
                    'average' => $topBusiness ? (float) $topBusiness->total_rating : 0 // Rating or 0
                ];
            })
            ->filter(function ($item) {
                return $item['average'] > 0; // Ensure we only return businesses with ratings
            });

        // Filter categories to only include those with businesses
//        $chartData = $categories->filter(function ($category) {
//            return $category->business->isNotEmpty(); // Only keep categories with businesses
//        })->map(function ($category) {
//            $topBusiness = $category->business->first();
//            return [
//                'name' => $topBusiness->business_name, // Use business name for display
//                'average' => (float)$topBusiness->total_rating // Convert rating to float
//            ];
//        });

        return view(
            'admin.dashboard',
            compact(
                'businesses',
                'consumers',
                'reviews',
                'topCompanies',
                'ratingsData',
                'genderPercentages',
                'chartData'
            )
        );
    }


    public function loginforBusiness()
    {

        return view('owner.auth.login');
    }

    public function postloginforBusiness()
    {
        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            //process validation here
            $credentials = array(
                "email" => $request->email,
                "password" => $request->password,
            );

            $user = Sentinel::authenticate($credentials);


            if ($user) {

                if ($user->inRole('business')) {
                    return redirect('dashboard/business');
                }

                return redirect('dashboard');
            } else {
                //return back
                //                flash('Invalid email or password.')->error();
                //return back
                Session::flash('error', 'Invalid username or password.!');
                return redirect()->back()->withInput();
            }
        }
    }

    public function consumerLogin()
    {

        return view('consumer.user.login');
    }

    public function postConsumerLogin(Request $request)
    {
        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            //process validation here
            $credentials = array(
                "email" => $request->email,
                "password" => $request->password,
            );

            $user = Sentinel::authenticate($credentials);

            if ($user) {
                if ($user->inRole('consumer')) {
                    if (Session::get('type') == 'business') {
                        return redirect('consumer/business/write-review/' . Session::get('company_id'));
                    }
                    if (Session::get('type') == 'product') {
                        return redirect('consumer/product/write-review/' . Session::get('product_id'));
                    }
                    if (Session::get('type') == 'service') {
                        return redirect('consumer/service/write-review/' . Session::get('service_id'));
                    }
                }
                if ($user->inRole('support')) {
                    return redirect('dashboard');
                }
                return redirect('dashboard');
            } else {
                Session::flash('error', 'Invalid username or password.!');
                return redirect()->back()->withInput();
            }
        }
    }

    public function logout()
    {
        Sentinel::logout(null, true);
        // Artisan::call('cache:clear');
        Session::forget(['rating_input', 'review_input', 'company_id', 'product_id', 'service_id']);
        return redirect('/');
    }

    public function forgetPassword()
    {
        return view('auth.forgot');
    }

    public function forgetEmailCheck(Request $request)
    {

        // Validate the email input
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        // $token = random_int(10000, 99999);
        if ($user) {
            $user->save();

            Mail::to($user->email)->send(new ResetToken($user));

            Session::flash('success', 'An email has been sent to ' . $request->email . '. Please check your inbox.');
            return redirect()->back()->withInput();
        } else {
            Session::flash('error', "We can't find a user with that email address.");
            return redirect()->back()->withInput();
        }
    }

    public function passwordReset()
    {
        return view('auth.reset');
    }

    public function passwordResetCodeCheck(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->reset_status == 0) {
                $resetCode = Sentinel::findById($user->id);

                $credentials = [
                    'reset_status' => 1,
                    'password' => $request->newpassword
                ];

                $resetUser = Sentinel::update($resetCode, $credentials);

                return redirect('/login');
            }
            if ($user->reset_status == 1) {
                Session::flash('error', "This token already used");
                return redirect('password/reset-with-code');
            }
        } else {
            Session::flash('error', "This token not exist");
            return redirect('password/reset-with-code');
        }
    }
}
