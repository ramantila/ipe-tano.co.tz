<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Session;

class UserController extends Controller
{

    public function index()
    {

        $role = Sentinel::findRoleByName('Admin');

        $admin = $role->users()->with('roles')->get();
        $users = User::orderBy('id', 'DESC')
            ->get();



        return view('admin.users.index', compact('users'));
    }

    public function create()
    {

        $roles = DB::table('roles')->get();

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {

        // Process phone number
        $phone = $request->phone;

        // Check if the number starts with '255'
        if (substr($phone, 0, 3) === '255') {
            // Remove '255' and add '0' at the beginning
            $phone = '0' . substr($phone, 3);
        }

        // Check if email already exists
        if (Sentinel::findByCredentials(['login' => $request->email])) {
            Session::flash('error', 'Email already exists!');
            return redirect()->back()->withInput();
        }

        // Prepare credentials
        $credentials = [
            'email' => $request->email,
            'phone' => $phone,
            'password' => 123456,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
        ];

        // Register and activate the user
        $user = Sentinel::registerAndActivate($credentials);

        // Assign role to the user
        $role = Sentinel::findRoleByName($request->role);
        $role->users()->attach($user->id);

        Session::flash('success', 'User saved successfully!');
        return redirect('users/view');
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);

        $roles = DB::table('roles')->get();


        foreach ($user->roles as $sel) {
            $selected = $sel->name;
        }

        return view('admin.users.edit', compact('user', 'roles', 'selected'));
    }

    public function update(Request $request, $user_id)
    {

        $user = Sentinel::findById($user_id);


        $credentials = [
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Str::random(5),
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
        ];

        if ($request->role != $request->previous) {
            $role = Sentinel::findRoleByName($request->previous);
            $role->users()->detach($user->id);
            $role = Sentinel::findRoleByName($request->role);
            $role->users()->attach($user->id);
        }
        $user = Sentinel::update($user, $credentials);

        Session::flash('success', 'User edited successfull!');
        return redirect('users/view');
    }

    public function delete($user_id)
    {

        $user = User::find($user_id);
        $user->deleted_at = 1;
        $user->save();
        return redirect('users/view');
    }

    public function changePassword()
    {

        return view('admin.change_password');
    }

    public function changePasswordSave(Request $request)
    {

        $user = Sentinel::getUser();

        if (strlen($request->new_password) > 6) {
            if (Sentinel::getUserRepository()->validateCredentials($user, ['password' => $request->current_password])) {
                $user = Sentinel::findById(Sentinel::getUser()->id);

                $credentials['password'] = $request->new_password;

                $user = Sentinel::update($user, $credentials);

                Session::flash('success', 'Password changed successfull!');
                return back();
            } else {
                Session::flash('error', 'Current Password is Invalid');
                return back();
            }
        } else {
            Session::flash('error', 'Your password must be 6 characters');
            return back();
        }
    }
}
