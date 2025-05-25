<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Gallery1Controller;
use App\Http\Controllers\Gallery2Controller;
use App\Http\Controllers\Gallery3Contoller;
use App\Http\Controllers\Gallery4Controller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\IncubatorsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AiController;

//problem
Route::get('name_studio',[AdminLoginController::class,'name_studio']);
Route::get('purchase_id',[AdminLoginController::class,'purchase_id']); 

/*********** Admin Login Page************/
Route::get('login', [AdminLoginController::class,'loginPage']);
Route::post('loginstore', [AdminLoginController::class,'loginStore']);



Route::get('dashboard', [AdminLoginController::class,'dashboardPage']);
Route::get('addUser', [AdminLoginController::class,'insert']);
Route::get('account', [AdminLoginController::class,'account']);
Route::get('user_id', [AdminLoginController::class,'user']);
Route::get('admin-user-create',[AdminLoginController::class,'admin_user_create']);
Route::get('amount',[AdminLoginController::class,'amount']);
Route::get('buyer_id',[AdminLoginController::class,'buyer_id']);
Route::get('buyer_type',[AdminLoginController::class,'buyer_type']);
Route::get('users-profile',[AdminLoginController::class,'users_profile']);
Route::get('contact_number',[AdminLoginController::class,'contact_number']);
Route::get('daily_monthly_report',[AdminLoginController::class,'daily_monthly_report']);
Route::get('email',[AdminLoginController::class,'email']);
Route::get('email1',[AdminLoginController::class,'email1']);
Route::get('export_data',[AdminLoginController::class,'export_data']);
Route::get('full-name',[AdminLoginController::class,'full_name']);
Route::get('index',[AdminLoginController::class,'index']);
Route::get('item_services_purchased',[AdminLoginController::class,'item_services_purchased']);
Route::get('user_id',[AdminLoginController::class,'user_id']);
Route::get('location_areas',[AdminLoginController::class,'location_areas']);
Route::get('joining_date',[AdminLoginController::class,'joining_date']);
Route::get('pages-blank',[AdminLoginController::class,'pages_blank']);
Route::get('pages-contact',[AdminLoginController::class,'pages_contact']);
Route::get('pages-error',[AdminLoginController::class,'pages_error']);
Route::get('pages-faq',[AdminLoginController::class,'pages_faq']);
Route::get('pages-login',[AdminLoginController::class,'pages_login']);
Route::get('pages-register',[AdminLoginController::class,'pages_register']);
Route::get('payment_method',[AdminLoginController::class,'payment_method']);
Route::get('phone_number',[AdminLoginController::class,'phone_number']);
Route::get('portfolio_url',[AdminLoginController::class,'portfolio_url']);
Route::get('profile_picture',[AdminLoginController::class,'profile_picture']);
Route::get('purchase_date',[AdminLoginController::class,'purchase_date']);
Route::get('purchase_history',[AdminLoginController::class,'purchase_history']);
Route::get('quick_access_button',[AdminLoginController::class,'quick_access_button']);
Route::get('ratings_review',[AdminLoginController::class,'ratings_review']);
Route::get('recent_activities',[AdminLoginController::class,'recent_activities']);
Route::get('revenue_reports',[AdminLoginController::class,'revenue_reports']);
Route::get('revenue_summary',[AdminLoginController::class,'revenue_summary']);
Route::get('services_offered',[AdminLoginController::class,'services_offered']);
Route::get('top_purchasing_users',[AdminLoginController::class,'top_purchasing_users']);
Route::get('total_photographers',[AdminLoginController::class,'total_photographers']);
Route::get('total_purchases',[AdminLoginController::class,'total_purchases']);
Route::get('total_users',[AdminLoginController::class,'total_users']);





































Route::get('/', function () {
    return view('welcome');
});
Route::get('team', [AboutController::class,'Team']);
Route::get('guildeline', [AboutController::class,'Guide']);
Route::get('email', [AboutController::class,'Email']);
Route::get('category', [AboutController::class,'Category']);
Route::get('earnings', [AboutController::class,'Earnings']);
Route::get('collaborators', [AboutController::class,'Collaborators']);


Route::get('project', [ProjectController::class,'index']);
Route::get('gallery', [Gallery1Controller::class,'galleryNew']);
Route::get('arcade', [Gallery2Controller::class,'galleryNew1']);
Route::get('treasures', [Gallery3Contoller::class,'galleryNew2']);
Route::get('classic', [Gallery4Controller::class,'galleryNew3']);
Route::get('about', [AboutController::class,'About']);
Route::get('service', [ServiceController::class,'Service']);
Route::get('service-in', [ServiceController::class,'Service_in']);
Route::get('incubators', [IncubatorsController::class,'Incubator']);
Route::get('portfolio', [IncubatorsController::class,'portfolio1']);
Route::get('portfolio2', [IncubatorsController::class,'portfolio2']);
Route::get('portfolio3', [IncubatorsController::class,'portfolio3']);
Route::get('contact-us', [ContactController::class,'Contact']);
Route::get('collab', [FormController::class,'Form']);

Route::get('booking', [BookingController::class,'Booking']);
Route::get('Ai-generation', [AiController::class,'AI']);



