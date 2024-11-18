<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin panel works start *****************************************************************************************************************************************
Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login', [App\Http\Controllers\Backend\LoginController::class, 'index'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Backend\LoginController::class, 'Store']);
});
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('logout', [App\Http\Controllers\Backend\LoginController::class,'destroy'])->name('admin.logout');
});
// LOGO
Route::get('/admin/logo', [App\Http\Controllers\Backend\LogoController::class, 'index'])->name('admin.logo');
Route::post('/admin/logo/update', [App\Http\Controllers\Backend\LogoController::class, 'update']);
// SEO & Social & Company Information 
Route::get('/admin/seo/create', [App\Http\Controllers\Backend\SeoController::class, 'create'])->name('admin.seo.create');
Route::post('/admin/seo/update', [App\Http\Controllers\Backend\SeoController::class, 'update'])->name('admin.seo.update');
Route::get('/admin/companyinformation/create', [App\Http\Controllers\Backend\SeoController::class, 'companycreate'])->name('admin.companyinformation.update');
Route::post('/admin/companyinformation/create', [App\Http\Controllers\Backend\SeoController::class, 'companyupdate'])->name('admin.companyinformation.update');
Route::get('/admin/social/create', [App\Http\Controllers\Backend\SeoController::class, 'socialcreate'])->name('admin.social.create');
Route::post('/admin/social/update', [App\Http\Controllers\Backend\SeoController::class, 'socialupdate'])->name('admin.social.update');
//Admin profile Update
Route::get('admin/update/change/{id}', [App\Http\Controllers\Backend\DashboardController::class, 'adminupdate']);
Route::post('admin/update/change/', [App\Http\Controllers\Backend\DashboardController::class, 'adminupdatesubmit'])->name('admin.profileupdate.change');
Route::get('admin/password/change/{id}', [App\Http\Controllers\Backend\DashboardController::class, 'passchange']);
Route::post('admin/password/change/', [App\Http\Controllers\Backend\DashboardController::class, 'passchangeresult'])->name('admin.password.change');
//Merittutors Resources
Route::get('/admin/merittutors-resources/create', [App\Http\Controllers\Backend\MerittutorsResourceController::class, 'create'])->name('admin.merittutorsresources.create');
Route::post('/admin/merittutors-resources/create', [App\Http\Controllers\Backend\MerittutorsResourceController::class, 'store'])->name('admin.merittutorsresources.create');
Route::get('/get/admin/merittutors-resources/subcategory/{cate_id}', [App\Http\Controllers\Backend\MerittutorsResourceController::class, 'getSubcategory']);
//category Manage
Route::get('/admin/category/index', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('admin.category.create');
Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'edit']);
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'delete']);
Route::get('/admin/category/active/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'active']);
Route::get('/admin/category/deactive/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'deActive']);
Route::post('/admin/category/update', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('admin.category.update');
// Sub Category Manage 
Route::get('/admin/subcategory/index', [App\Http\Controllers\Backend\SubCategoryController::class, 'index'])->name('admin.subcategory.index');
Route::get('/admin/subcategory/create', [App\Http\Controllers\Backend\SubCategoryController::class, 'create'])->name('admin.subcategory.create');
Route::post('/admin/subcategory/create', [App\Http\Controllers\Backend\SubCategoryController::class, 'store'])->name('admin.subcategory.create');
Route::get('/admin/subcategory/edit/{id}', [App\Http\Controllers\Backend\SubCategoryController::class, 'edit']);
Route::get('/admin/subcategory/delete/{id}', [App\Http\Controllers\Backend\SubCategoryController::class, 'delete']);
Route::get('/admin/subcategory/active/{id}', [App\Http\Controllers\Backend\SubCategoryController::class, 'active']);
Route::get('/admin/subcategory/deactive/{id}', [App\Http\Controllers\Backend\SubCategoryController::class, 'deActive']);
Route::post('/admin/subcategory/update', [App\Http\Controllers\Backend\SubCategoryController::class, 'update'])->name('admin.subcategory.update');
// Re Sub Category Manage 
Route::get('/admin/resubcategory/index', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'index'])->name('admin.resubcategory.index');
Route::get('/admin/resubcategory/create', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'create'])->name('admin.resubcategory.create');
Route::post('/admin/resubcategory/create', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'store'])->name('admin.resubcategory.create');
Route::get('/admin/resubcategory/edit/{id}', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'edit']);
Route::get('/admin/resubcategory/delete/{id}', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'delete']);
Route::get('/admin/resubcategory/active/{id}', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'active']);
Route::get('/admin/resubcategory/deactive/{id}', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'deActive']);
Route::post('/admin/resubcategory/update', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'update'])->name('admin.resubcategory.update');
Route::get('get/admin/subcategory/{cate_id}', [App\Http\Controllers\Backend\ReSubCategoryController::class, 'getSubcategory']);
// Subscription Manage
Route::get('/admin/subscription/index', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'index'])->name('admin.subscription.index');
Route::get('/admin/subscription/create', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'create'])->name('admin.subscription.create');
Route::post('/admin/subscription/create', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'store'])->name('admin.subscription.create');
Route::get('/admin/subscription/edit/{id}', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'edit']);
Route::get('/admin/subscription/delete/{id}', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'delete']);
Route::get('/admin/subscription/active/{id}', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'active']);
Route::get('/admin/subscription/deactive/{id}', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'deActive']);
Route::post('/admin/subscription/update', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'update'])->name('admin.subscription.update');
// User Manage
Route::get('/admin/user/index', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('admin.user.index');
// Route::get('/admin/user/create', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'create'])->name('admin.subscription.create');
// Route::post('/admin/user/create', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'store'])->name('admin.subscription.create');
// Route::get('/admin/user/edit/{id}', [App\Http\Controllers\Backend\MeritSubscriptionController::class, 'edit']);
Route::get('/admin/user/delete/{id}', [App\Http\Controllers\Backend\UserController::class, 'delete']);
Route::get('/admin/user/active/{id}', [App\Http\Controllers\Backend\UserController::class, 'active']);
Route::get('/admin/user/deactive/{id}', [App\Http\Controllers\Backend\UserController::class, 'deActive']);
// PAST PAPER Manage
Route::get('/admin/past-paper/index', [App\Http\Controllers\Backend\PastPaperController::class, 'index'])->name('admin.past-paper.index');
Route::get('/admin/past-paper/create', [App\Http\Controllers\Backend\PastPaperController::class, 'create'])->name('admin.past-paper.create');
Route::post('/admin/past-paper/create', [App\Http\Controllers\Backend\PastPaperController::class, 'store'])->name('admin.past-paper.create');
Route::get('/admin/past-paper/edit/{id}', [App\Http\Controllers\Backend\PastPaperController::class, 'edit']);
Route::get('/admin/past-paper/delete/{id}', [App\Http\Controllers\Backend\PastPaperController::class, 'delete']);
Route::get('/admin/past-paper/active/{id}', [App\Http\Controllers\Backend\PastPaperController::class, 'active']);
Route::get('/admin/past-paper/deactive/{id}', [App\Http\Controllers\Backend\PastPaperController::class, 'deActive']);
Route::post('/admin/past-paper/update', [App\Http\Controllers\Backend\PastPaperController::class, 'update'])->name('admin.past-paper.update');
Route::get('/get/admin/subject-list/{board_id}/{exam_type}', [App\Http\Controllers\Backend\PastPaperController::class, 'getSubject']);
// worksheet Manage
Route::get('/admin/worksheet/index', [App\Http\Controllers\Backend\WorksheetController::class, 'index'])->name('admin.worksheet.index');
Route::get('/admin/worksheet/create', [App\Http\Controllers\Backend\WorksheetController::class, 'create'])->name('admin.worksheet.create');
Route::post('/admin/worksheet/create', [App\Http\Controllers\Backend\WorksheetController::class, 'store'])->name('admin.worksheet.create');
Route::get('/admin/worksheet/edit/{id}', [App\Http\Controllers\Backend\WorksheetController::class, 'edit']);
Route::get('/admin/worksheet/delete/{id}', [App\Http\Controllers\Backend\WorksheetController::class, 'delete']);
Route::get('/admin/worksheet/active/{id}', [App\Http\Controllers\Backend\WorksheetController::class, 'active']);
Route::get('/admin/worksheet/deactive/{id}', [App\Http\Controllers\Backend\WorksheetController::class, 'deActive']);
Route::post('/admin/worksheet/update', [App\Http\Controllers\Backend\WorksheetController::class, 'update'])->name('admin.worksheet.update');
Route::get('get/admin/worksheet-category/{subject_id}', [App\Http\Controllers\Backend\WorksheetController::class, 'getCategory']);
Route::get('get/admin/worksheet-subcategory/{cate_id}', [App\Http\Controllers\Backend\WorksheetController::class, 'getSubCategory']);
Route::get('get/admin/worksheet-resubcategory/{subcate_id}', [App\Http\Controllers\Backend\WorksheetController::class, 'getReSubCategory']);
// FAQ Manage
Route::get('/admin/faq/index', [App\Http\Controllers\Backend\FaqController::class, 'index'])->name('admin.faq.index');
Route::get('/admin/faq/create', [App\Http\Controllers\Backend\FaqController::class, 'create'])->name('admin.faq.create');
Route::post('/admin/faq/create', [App\Http\Controllers\Backend\FaqController::class, 'store'])->name('admin.faq.create');
Route::get('/admin/faq/edit/{id}', [App\Http\Controllers\Backend\FaqController::class, 'edit']);
Route::get('/admin/faq/delete/{id}', [App\Http\Controllers\Backend\FaqController::class, 'delete']);
Route::get('/admin/faq/active/{id}', [App\Http\Controllers\Backend\FaqController::class, 'active']);
Route::get('/admin/faq/deactive/{id}', [App\Http\Controllers\Backend\FaqController::class, 'deActive']);
Route::post('/admin/faq/update', [App\Http\Controllers\Backend\FaqController::class, 'update'])->name('admin.faq.update');
// Admin User
Route::get('/admin/admin-user/index', [App\Http\Controllers\Backend\AdminUserController::class, 'index'])->name('admin.admin-user.index');
Route::get('/admin/admin-user/create', [App\Http\Controllers\Backend\AdminUserController::class, 'create'])->name('admin.admin-user.create');
Route::post('/admin/admin-user/create', [App\Http\Controllers\Backend\AdminUserController::class, 'store'])->name('admin.admin-user.create');
Route::get('/admin/admin-user/edit/{id}', [App\Http\Controllers\Backend\AdminUserController::class, 'edit']);
Route::get('/admin/admin-user/delete/{id}', [App\Http\Controllers\Backend\AdminUserController::class, 'delete']);
Route::get('/admin/admin-user/active/{id}', [App\Http\Controllers\Backend\AdminUserController::class, 'active']);
Route::get('/admin/admin-user/deactive/{id}', [App\Http\Controllers\Backend\AdminUserController::class, 'deActive']);
Route::post('/admin/admin-user/update', [App\Http\Controllers\Backend\AdminUserController::class, 'update'])->name('admin.admin-user.update');
Route::post('/admin/admin-user/password-update', [App\Http\Controllers\Backend\AdminUserController::class, 'passUpdate'])->name('admin.admin-user.passwordupdate');

// privacy policy
Route::get('/admin/privacy-policy/update', [App\Http\Controllers\Backend\PolicyController::class, 'index'])->name('admin.privacy-policy.update');
Route::post('/admin/privacy-policy/update', [App\Http\Controllers\Backend\PolicyController::class, 'update'])->name('admin.privacy-policy.update');
// Terms & Condition
Route::get('/admin/terms-condition/update', [App\Http\Controllers\Backend\PolicyController::class, 'termsindex'])->name('admin.termsindex.update');
Route::post('/admin/terms-condition/update', [App\Http\Controllers\Backend\PolicyController::class, 'termsupdate'])->name('admin.termsindex.update');
// contact
Route::get('/admin/contact/index', [App\Http\Controllers\Backend\ContactUsController::class, 'index'])->name('admin.contact.index');
Route::get('/admin/contact/view/{id}', [App\Http\Controllers\Backend\ContactUsController::class, 'view']);
// worksheet
//worksheet category Manage
Route::get('/admin/worksheet-category/index', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'index'])->name('admin.worksheetcategory.index');
Route::get('/admin/worksheet-category/create', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'create'])->name('admin.worksheetcategory.create');
Route::post('/admin/worksheet-category/create', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'store'])->name('admin.worksheetcategory.create');
Route::get('/admin/worksheet-category/edit/{id}', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'edit']);
Route::get('/admin/worksheet-category/delete/{id}', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'delete']);
Route::get('/admin/worksheet-category/active/{id}', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'active']);
Route::get('/admin/worksheet-category/deactive/{id}', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'deActive']);
Route::post('/admin/worksheet-category/update', [App\Http\Controllers\Backend\WorkSheetCategoryController::class, 'update'])->name('admin.worksheetcategory.update');

//worksheetSubcategory Manage
Route::get('/admin/worksheet-subcategory/index', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'index'])->name('admin.worksheetsubcategory.index');
Route::get('/admin/worksheet-subcategory/create', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'create'])->name('admin.worksheetsubcategory.create');
Route::post('/admin/worksheet-subcategory/create', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'store'])->name('admin.worksheetsubcategory.create');
Route::get('/admin/worksheet-subcategory/edit/{id}', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'edit']);
Route::get('/admin/worksheet-subcategory/delete/{id}', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'delete']);
Route::get('/admin/worksheet-subcategory/active/{id}', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'active']);
Route::get('/admin/worksheet-subcategory/deactive/{id}', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'deActive']);
Route::post('/admin/worksheet-subcategory/update', [App\Http\Controllers\Backend\WorkSheetSubCategoryController::class, 'update'])->name('admin.worksheetsubcategory.update');
//worksheetReSubcategory Manage
Route::get('/admin/worksheet-resubcategory/index', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'index'])->name('admin.worksheetresubcategory.index');
Route::get('/admin/worksheet-resubcategory/create', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'create'])->name('admin.worksheetresubcategory.create');
Route::post('/admin/worksheet-resubcategory/create', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'store'])->name('admin.worksheetresubcategory.create');
Route::get('/admin/worksheet-resubcategory/edit/{id}', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'edit']);
Route::get('/admin/worksheet-resubcategory/delete/{id}', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'delete']);
Route::get('/admin/worksheet-resubcategory/active/{id}', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'active']);
Route::get('/admin/worksheet-resubcategory/deactive/{id}', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'deActive']);
Route::post('/admin/worksheet-resubcategory/update', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'update'])->name('admin.worksheetresubcategory.update');
Route::get('get/admin/worksheet-ajax/subcategory/{cate_id}', [App\Http\Controllers\Backend\WorkSheetReSubCategoryController::class, 'getSubcategory']);

//worksheet subject Manage
Route::get('/admin/worksheet-subject/index', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'index'])->name('admin.worksheetsubject.index');
Route::get('/admin/worksheet-subject/create', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'create'])->name('admin.worksheetsubject.create');
Route::post('/admin/worksheet-subject/create', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'store'])->name('admin.worksheetsubject.create');
Route::get('/admin/worksheet-subject/edit/{id}', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'edit']);
Route::get('/admin/worksheet-subject/delete/{id}', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'delete']);
Route::get('/admin/worksheet-subject/active/{id}', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'active']);
Route::get('/admin/worksheet-subject/deactive/{id}', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'deActive']);
Route::post('/admin/worksheet-subject/update', [App\Http\Controllers\Backend\WorksheeSubjectController::class, 'update'])->name('admin.worksheetsubject.update');
//blogs subject Manage
Route::get('/admin/blogs/index', [App\Http\Controllers\Backend\BlogsController::class, 'index'])->name('admin.blogs.index');
Route::get('/admin/blogs/create', [App\Http\Controllers\Backend\BlogsController::class, 'create'])->name('admin.blogs.create');
Route::post('/admin/blogs/create', [App\Http\Controllers\Backend\BlogsController::class, 'store'])->name('admin.blogs.create');
Route::get('/admin/blogs/edit/{id}', [App\Http\Controllers\Backend\BlogsController::class, 'edit']);
Route::get('/admin/blogs/delete/{id}', [App\Http\Controllers\Backend\BlogsController::class, 'delete']);
Route::get('/admin/blogs/active/{id}', [App\Http\Controllers\Backend\BlogsController::class, 'active']);
Route::get('/admin/blogs/deactive/{id}', [App\Http\Controllers\Backend\BlogsController::class, 'deActive']);
Route::post('/admin/blogs/update', [App\Http\Controllers\Backend\BlogsController::class, 'update'])->name('admin.blogs.update');
// subscription list customer
Route::get('/admin/subscription-customer/index', [App\Http\Controllers\Backend\SubscriptionCustomerController::class, 'index'])->name('admin.subscription-customer.index');






// Frontend works start *****************************************************************************************************************************************
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'home']);
Route::get('/about-us', [App\Http\Controllers\Frontend\FrontendController::class, 'aboutUs']);
Route::get('/blogs', [App\Http\Controllers\Frontend\FrontendController::class, 'blogs']);
Route::get('blog-details/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogsDetails']);

Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contactUs']);
Route::post('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contactUsStore']);
Route::get('/faq', [App\Http\Controllers\Frontend\FrontendController::class, 'faq']);
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacypolicy']);
Route::get('/terms-condition', [App\Http\Controllers\Frontend\FrontendController::class, 'termsCondition']);
Route::get('/shop', [App\Http\Controllers\Frontend\FrontendController::class, 'shop']);

Route::post('/subscribe', [App\Http\Controllers\Frontend\FrontendController::class, 'subscribe']);


Route::get('/schools-pricing', [App\Http\Controllers\Frontend\FrontendController::class, 'schoolPricing']);
Route::get('/individuals-pricing', [App\Http\Controllers\Frontend\FrontendController::class, 'individualsPricing']);

Route::get('/past-paper', [App\Http\Controllers\Frontend\FrontendController::class, 'pastPaper']);
Route::get('/exam-series/{series}', [App\Http\Controllers\Frontend\FrontendController::class, 'examSeries']);
Route::get('/past-paper-subjects/{series}/{board}', [App\Http\Controllers\Frontend\FrontendController::class, 'exampapersubjects']);
Route::get('/exam-subjects/{series}/{board}', [App\Http\Controllers\Frontend\FrontendController::class, 'exampapersubjects']);
// Route::get('/past-papers/details/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'pastPaperDetails']);

Route::get('pastpapers/{category}/{subcategory}/{resubcategory}', [App\Http\Controllers\Frontend\FrontendController::class, 'pastPaperDetails'])->name('pastpapers');




// ajax
Route::get('get/admin/allsubcategory/{category}', [App\Http\Controllers\Backend\PastPaperController::class, 'getSubcategory'])->name('getSubcategory');

Route::get('get/admin/allresubcategory/{subcategory}', [App\Http\Controllers\Backend\PastPaperController::class, 'getReSubcategory'])->name('getReSubcategory');






// Register
Route::get('/email/verify/{email}/{id}', [App\Http\Controllers\Frontend\UserRegisterController::class, 'email_verify']);

// Profile_Image_1658224879

Route::get('/all-past-papers/gcse', [App\Http\Controllers\Frontend\FrontendController::class, 'SubjectlistGcse']);
Route::get('/all-past-papers/igcse', [App\Http\Controllers\Frontend\FrontendController::class, 'SubjectlistIgcse']);
Route::get('/all-past-papers/alevel', [App\Http\Controllers\Frontend\FrontendController::class, 'SubjectlistAlevel']);
Route::get('/all-past-papers/aslevel', [App\Http\Controllers\Frontend\FrontendController::class, 'SubjectlistAslevel']);


Route::get('/resources/{type}/{subject}', [App\Http\Controllers\Frontend\FrontendController::class, 'SubjectDetails']);

// auth user dashboard
Route::get('/dashboard', [App\Http\Controllers\Frontend\UserDashboardController::class, 'dashboard']);
Route::get('/profile', [App\Http\Controllers\Frontend\UserDashboardController::class, 'profile']);
Route::post('/profile', [App\Http\Controllers\Frontend\UserDashboardController::class, 'profileUpdate']);

Route::post('/profile-password-update', [App\Http\Controllers\Frontend\UserDashboardController::class, 'profilePasswordUpdate']);


Route::get('/purchase-history', [App\Http\Controllers\Frontend\UserDashboardController::class, 'purchaseHistory']);
Route::get('/download-history', [App\Http\Controllers\Frontend\UserDashboardController::class, 'downloadHistory']);
Route::get('/subcription-details', [App\Http\Controllers\Frontend\UserDashboardController::class, 'subcriptionDetails']);
Route::get('/wishlist', [App\Http\Controllers\Frontend\UserDashboardController::class, 'wishList']);
Route::get('/edit-profile', [App\Http\Controllers\Frontend\UserDashboardController::class, 'editProfile']);
Route::get('/logout', [App\Http\Controllers\Frontend\UserDashboardController::class, 'logout']);


Route::get('/register', [App\Http\Controllers\Frontend\UserRegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Frontend\UserRegisterController::class, 'create'])->name('register');
Route::post('/verifyCode', [App\Http\Controllers\Frontend\UserRegisterController::class, 'verify_code'])
    ->name('verify.code');

// subscription Checkout
Route::get('/checkout', [App\Http\Controllers\Frontend\SubscriptionController::class, 'checkout'])->name('plan.checkout');


 
// Route::post('/purchase', function (Request $request) {

//     $stripePriceId = 'price_deluxe_album';
//     $quantity = 1;
 
//     return $request->user()->checkout([$stripePriceId => $quantity], [
//         'success_url' => route('plan.success'),
//         'cancel_url' => route('plan.cancel'),
//     ]);
// })->name('checkout');

Route::post('/purchase', [App\Http\Controllers\Frontend\SubscriptionController::class, 'purchase'])->name('plan.purchase');

Route::get('/checkout/success', [App\Http\Controllers\Frontend\SubscriptionController::class, 'success'])->name('plan.success');
Route::get('/checkout/cancel', [App\Http\Controllers\Frontend\SubscriptionController::class, 'cancel'])->name('plan.cancel');



// socialite
Route::get('/auth/google', [App\Http\Controllers\SocialAuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [App\Http\Controllers\SocialAuthController::class, 'handleGoogleCallback']);


