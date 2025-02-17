<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', action: [App\Http\Controllers\ConsumerController::class, 'index']);
Route::get('/home', [App\Http\Controllers\ConsumerController::class, 'indexBusiness']);
Route::get('/search', [App\Http\Controllers\ConsumerController::class, 'search']);
Route::get('/search-product', [App\Http\Controllers\ConsumerController::class, 'searchProduct']);
Route::get('businesses', [App\Http\Controllers\ConsumerController::class, 'reviews']);
Route::get('reviews/company', [App\Http\Controllers\ConsumerController::class, 'reviewsCompany']);
Route::get('reviews/company/category', [App\Http\Controllers\ConsumerController::class, 'reviewsCompanyCategory']);
Route::get('business/reviews/{business_id}', [App\Http\Controllers\ConsumerController::class, 'review']);
Route::get('business/review/reported/{business_id}', [App\Http\Controllers\ConsumerController::class, 'businessReviewReported']);
Route::post('business/review/reported/{business_id}', [App\Http\Controllers\ConsumerController::class, 'storebusinessReviewReported']);
Route::get('categories', [App\Http\Controllers\ConsumerController::class, 'categories']);
Route::get('category-businesses/{category_name}', [App\Http\Controllers\ConsumerController::class, 'categoryBusinesses']);
Route::get('terms-and-conditions', [App\Http\Controllers\ConsumerController::class, 'terms']);
Route::get('register', [App\Http\Controllers\ConsumerController::class, 'register']);
Route::post('register', [App\Http\Controllers\ConsumerController::class, 'registerProcess']);
Route::get('password/forget', [App\Http\Controllers\ConsumerController::class, 'forget']);
Route::get('consumer/product/review/reported/{review_id}', [App\Http\Controllers\ConsumerController::class, 'productReviewReported']);
Route::post('consumer/product/review/reported/{review_id}', [App\Http\Controllers\ConsumerController::class, 'storeproductReviewReported']);
Route::get('consumer/service/review/reported/{review_id}', [App\Http\Controllers\ConsumerController::class, 'serviceReviewReported']);
Route::post('consumer/service/review/reported/{review_id}', [App\Http\Controllers\ConsumerController::class, 'storeserviceReviewReported']);


Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login-user');
Route::post('postLogin', [App\Http\Controllers\LoginController::class, 'processLogin'])->name('processLogin');
Route::get('password/forget', [App\Http\Controllers\LoginController::class, 'forgetPassword']);
Route::post('password/forget', [App\Http\Controllers\LoginController::class, 'forgetEmailCheck']);
Route::get('password/reset-with-code', [App\Http\Controllers\LoginController::class, 'passwordReset']);
Route::post('password/reset', [App\Http\Controllers\LoginController::class, 'passwordResetCodeCheck']);

Route::get('/business-login', [App\Http\Controllers\LoginController::class, 'loginforBusiness']);
Route::post('/business-login', [App\Http\Controllers\LoginController::class, 'postloginforBusiness']);

Route::get('/consumer-login', [App\Http\Controllers\LoginController::class, 'consumerLogin']);
Route::post('/consumer-login', [App\Http\Controllers\LoginController::class, 'postConsumerLogin']);

Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/dashboard',[App\Http\Controllers\LoginController::class, 'dashboard']);
// Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login-user');

Route::group(['prefix' => 'businesses'], function () {
    Route::get('view', [App\Http\Controllers\BusinnessController::class, 'index']);
    Route::get('create',[App\Http\Controllers\BusinnessController::class, 'create']);
    Route::post('store', [App\Http\Controllers\BusinnessController::class, 'store']);
    Route::get('{business_id}/show', [App\Http\Controllers\BusinnessController::class, 'show']);
    Route::get('{business_id}/edit', [App\Http\Controllers\BusinnessController::class, 'edit']);
    Route::post('{business_id}/update', [App\Http\Controllers\BusinnessController::class, 'update']); 
    Route::get('{business_id}/suspend', [App\Http\Controllers\BusinnessController::class, 'suspend']);
    Route::get('{business_id}/business/verify', [App\Http\Controllers\BusinnessController::class, 'businessVerify']);
    Route::post('{business_id}/delete', [App\Http\Controllers\BusinnessController::class, 'delete']);

    //Route for Product
    Route::get('{business_id}/product/view', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('{business_id}/product/create',[App\Http\Controllers\ProductController::class, 'create']);
    Route::post('{business_id}/product/store', [App\Http\Controllers\ProductController::class, 'store']);

    //Route for Services
    Route::get('{business_id}/service/view', [App\Http\Controllers\ServiceController::class, 'index']);
    Route::get('{business_id}/service/create',[App\Http\Controllers\ServiceController::class, 'create']);
    Route::post('{business_id}/service/store', [App\Http\Controllers\ServiceController::class, 'store']);

    //Route for Services
    Route::get('missed-form', [App\Http\Controllers\ServiceController::class, 'missedForm']);
});

//Route for Business Claim
Route::group(['prefix' => 'businesses-claims'], function () {
    Route::get('view', [App\Http\Controllers\ClaimController::class, 'index']);
    Route::get('{claim_id}/show', [App\Http\Controllers\ClaimController::class, 'show']);
    Route::post('{claim_id}/transfer', [App\Http\Controllers\ClaimController::class, 'transfer']);
    Route::get('{business_id}/verify', [App\Http\Controllers\ClaimController::class, 'verify']);
});

//Route for category
Route::group(['prefix' => 'categories'], function () {
    Route::get('view', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('create',[App\Http\Controllers\CategoryController::class, 'create']);
    Route::post('store', [App\Http\Controllers\CategoryController::class, 'store']);
    Route::post('{category_id}/update',[App\Http\Controllers\CategoryController::class,'update']);
    Route::post('{id}/delete',[App\Http\Controllers\CategoryController::class,'delete']);
});

//Route for role
Route::group(['prefix' => 'roles'], function () {
    Route::get('view', [App\Http\Controllers\RoleController::class, 'index']);
    Route::get('create',[App\Http\Controllers\RoleController::class, 'create']);
    Route::post('store', [App\Http\Controllers\RoleController::class, 'store']);
    Route::get('{role_id}/edit', [App\Http\Controllers\RoleController::class, 'edit']);
    Route::post('{role_id}/update', [App\Http\Controllers\RoleController::class, 'update']);
    Route::post('{role_id}/delete', [App\Http\Controllers\RoleController::class, 'delete']);
});

//Route for Users
Route::group(['prefix' => 'users'], function () {
    Route::get('view', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('create', [App\Http\Controllers\UserController::class, 'create']);
    Route::post('store', [App\Http\Controllers\UserController::class, 'store']);
    Route::get('{user_id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('{user_id}/update', [App\Http\Controllers\UserController::class, 'update']);
    Route::post('{user_id}/delete', [App\Http\Controllers\UserController::class, 'delete']); 

    Route::get('change-password', [App\Http\Controllers\UserController::class, 'changePassword']);
    Route::post('change-password', [App\Http\Controllers\UserController::class, 'changePasswordSave']);
});

//Route for Reviews
Route::group(['prefix' => 'reviews'], function () {
    Route::get('view', [App\Http\Controllers\BusinessReviewController::class, 'index']);
    Route::get('create',[App\Http\Controllers\BusinessReviewController::class, 'create']);
    Route::get('{review_id}/show',[App\Http\Controllers\BusinessReviewController::class, 'show']);
    Route::post('{review_id}/update',[App\Http\Controllers\BusinessReviewController::class, 'update']);
    Route::get('{review_id}/delete',[App\Http\Controllers\BusinessReviewController::class, 'delete']);

    Route::get('products/view', [App\Http\Controllers\BusinessReviewController::class, 'indexProduct']);
    Route::get('products/review/{product_id}', [App\Http\Controllers\BusinessReviewController::class, 'showProduct']);
    Route::post('products/review/{review_id}/update',[App\Http\Controllers\BusinessReviewController::class, 'updateProduct']);
    // Route::get('{review_id}/delete',[App\Http\Controllers\BusinessReviewController::class, 'delete']);

    Route::get('services/view', [App\Http\Controllers\BusinessReviewController::class, 'indexService']);
    Route::get('services/review/{service_id}', [App\Http\Controllers\BusinessReviewController::class, 'showServices']);
    Route::post('services/review/{review_id}/update',[App\Http\Controllers\BusinessReviewController::class, 'updateService']);
    Route::get('services/review/{review_id}/delete',[App\Http\Controllers\BusinessReviewController::class, 'deleteService']);
});


// ================================= BUSINESS OWNER ===========================================================
Route::get('/sign-up', [App\Http\Controllers\OwnerController::class, 'signUp']);
Route::post('postSignup', [App\Http\Controllers\OwnerController::class, 'processSignup']);

Route::get('dashboard/business', [App\Http\Controllers\OwnerController::class, 'dashboard']);
Route::get('claims/business', [App\Http\Controllers\OwnerController::class, 'claimBusiness']);
Route::get('overview/business', [App\Http\Controllers\OwnerController::class, 'overview']);



Route::group(['prefix' => 'business'], function () {

    Route::get('view', [App\Http\Controllers\OwnerController::class, 'indexBusiness']);
    Route::get('terms-and-condition', [App\Http\Controllers\OwnerController::class, 'termsCondition']);
    Route::get('create', [App\Http\Controllers\OwnerController::class, 'createBusiness']);
    Route::get('step-business-info', [App\Http\Controllers\OwnerController::class, 'stepBusinessInfo']);
    Route::post('store-business-info', [App\Http\Controllers\OwnerController::class, 'storeBusinessInfo']);
    Route::get('step-download', [App\Http\Controllers\OwnerController::class, 'stepDownload'])->name('owner.business.step_download');
    Route::get('step-upload', [App\Http\Controllers\OwnerController::class, 'stepUpload']);
    Route::post('store-step-upload', [App\Http\Controllers\OwnerController::class, 'storeStepUpload']);
    Route::post('store', [App\Http\Controllers\OwnerController::class, 'storeBusiness']);
    Route::get('{business_id}/show', [App\Http\Controllers\OwnerController::class, 'showBusiness']);
    Route::get('{business_id}/edit', [App\Http\Controllers\OwnerController::class, 'editBusiness']);
    Route::post('{business_id}/update', [App\Http\Controllers\OwnerController::class, 'updateBusiness']);

    Route::get('{business_id}/product/view', [App\Http\Controllers\OwnerController::class, 'indexProduct']);
    Route::get('{business_id}/product/create', [App\Http\Controllers\OwnerController::class, 'createProduct']);
    Route::post('{business_id}/product/store', [App\Http\Controllers\OwnerController::class, 'storeProduct']);

    Route::get('{business_id}/service/view', [App\Http\Controllers\OwnerController::class, 'indexService']);
    Route::get('{business_id}/service/create', [App\Http\Controllers\OwnerController::class, 'createService']);
    Route::post('{business_id}/service/store', [App\Http\Controllers\OwnerController::class, 'storeService']);

    Route::get('{business_id}/incomplete_from/step_business', [App\Http\Controllers\OwnerController::class, 'incompleteBusinesInfo']);
    Route::post('{business_id}/incomplete_from/store_step_business', [App\Http\Controllers\OwnerController::class, 'storeincompleteBusinesInfo']);
    Route::get('{business_id}/incomplete_from/step_download', [App\Http\Controllers\OwnerController::class, 'incompleteDownload'])->name('owner.incomplete.step_download');
    Route::get('{business_id}/incomplete_from/step_upload', [App\Http\Controllers\OwnerController::class, 'incompleteUpload']);
    Route::post('{business_id}/incomplete_from/step_upload', [App\Http\Controllers\OwnerController::class, 'storeincompleteUpload']);
    // Route::post('overview/terms-and-conditions', [App\Http\Controllers\OwnerController::class, 'storeTerms']);


});

Route::group(['prefix' => 'claims'], function () {
    Route::get('create', [App\Http\Controllers\OwnerController::class, 'createClaimsBusiness']);
    Route::post('search', [App\Http\Controllers\OwnerController::class, 'searchClaimsBusiness']);
    Route::get('{claim_id}/claim-details', [App\Http\Controllers\OwnerController::class, 'claimsDetailsBusiness']); 
    Route::post('{claim_id}/session', [App\Http\Controllers\OwnerController::class, 'sessionClaimsBusiness']);
    Route::post('{claim_id}/store', [App\Http\Controllers\OwnerController::class, 'storeClaimsBusiness']);
    Route::get('view', [App\Http\Controllers\OwnerController::class, 'indexClaimsBusiness']);
});

Route::group(['prefix' => 'reviews-business'], function () {
    Route::get('view',[App\Http\Controllers\OwnerController::class, 'indexReviews']);

    Route::get('products/{business_id}/reviews', [App\Http\Controllers\OwnerController::class, 'indexProductReviews']);
    Route::get('services/{business_id}/reviews', [App\Http\Controllers\OwnerController::class, 'indexService']);

});

// =================================  CONSUMER ===========================================================
Route::group(['prefix' => 'consumer'], function () {
    Route::get('view', [App\Http\Controllers\UserConsumerController::class, 'index']); 
    Route::get('business/write-review/{company_id}', [App\Http\Controllers\UserConsumerController::class, 'comment']);
    Route::get('product/write-review/{product_id}', [App\Http\Controllers\UserConsumerController::class, 'productReview']);
    Route::get('service/write-review/{service_id}', [App\Http\Controllers\UserConsumerController::class, 'serviceReview']);
    Route::get('product/read-more/{product_id}', [App\Http\Controllers\UserConsumerController::class, 'productReadmore']);
    Route::get('service/read-more/{product_id}', [App\Http\Controllers\UserConsumerController::class, 'serviceReadmore']);
    Route::get('evaluate/company', [App\Http\Controllers\UserConsumerController::class, 'evaluate']);
    Route::get('review-list/{business_id}', [App\Http\Controllers\UserConsumerController::class, 'reviewList']); 
    Route::get('all-review-list', [App\Http\Controllers\UserConsumerController::class, 'allReviewList']); 
    Route::get('product-review-list/{product_id}', [App\Http\Controllers\UserConsumerController::class, 'productReviewList']);
    Route::get('service-review-list/{service_id}', [App\Http\Controllers\UserConsumerController::class, 'serviceReviewList']);
    Route::post('review-store', [App\Http\Controllers\UserConsumerController::class, 'storeReview']);
    Route::post('product/review-store', [App\Http\Controllers\UserConsumerController::class, 'storeProductReview']);
    Route::post('service/review-store', [App\Http\Controllers\UserConsumerController::class, 'storeServiceReview']);
    Route::get('create',[App\Http\Controllers\UserConsumerController::class, 'create']);
    Route::post('store', [App\Http\Controllers\UserConsumerController::class, 'store']);
    Route::get('{review_id}/show',[App\Http\Controllers\UserConsumerController::class, 'show']);
    Route::post('/review/like', [App\Http\Controllers\UserConsumerController::class, 'likeReview']);
});

Route::get('test', [App\Http\Controllers\TestController::class, 'testemail']);




// =================================  added routes by frontend developer - nuhu ===========================================================

//about us route
Route::get('/about-us', [App\Http\Controllers\ConsumerController::class, 'aboutUs']);


// language translation route
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['sw', 'en'])) {
        \Illuminate\Support\Facades\Session::put('locale', $locale);
        Illuminate\Support\Facades\App::setLocale($locale);
    }
    return redirect()->back();
});

Route::get('/preview-terms/{language}', [App\Http\Controllers\ConsumerController::class, 'previewTerms'])->name('preview.terms');

Route::get('/privacy-policy/{language}', [App\Http\Controllers\ConsumerController::class, 'previewPrivacyPolicy'])->name('preview.privacy');




// for business routes added by frontend developer
Route::prefix('for-business')->group(function () {
    Route::get('/home', [App\Http\Controllers\ConsumerController::class, 'indexBusiness'])->name('for-business.home');
    Route::get('/about-us', [App\Http\Controllers\ConsumerController::class, 'aboutUsBusiness'])->name('for-business.about-us');
    Route::get('/why-us', [App\Http\Controllers\ConsumerController::class, 'whyUsBusiness'])->name('for-business.why-us');
    Route::get('/contact', [App\Http\Controllers\ConsumerController::class, 'contactBusiness'])->name('for-business.contacts');
    Route::get('/pricing', [App\Http\Controllers\ConsumerController::class, 'pricingBusiness'])->name('for-business.pricing');


});


// Redirect from /home to /for-business/home
Route::get('/home', function () {
    return redirect('/for-business/home');
});
