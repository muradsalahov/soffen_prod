<?php

use App\Http\Controllers\AdminFeaturesController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPlanController;
use App\Http\Controllers\AdminPricingController;
use App\Http\Controllers\AdminProjectsController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminAboutusController;
use App\Http\Controllers\AdminWhychooseController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* FRONT ROUTE */
Route::get('/', [FrontController::class, 'home'])->name('front_home');
Route::get('/about', [FrontController::class, 'about'])->name('front_about');
Route::get('/service', [FrontController::class, 'service'])->name('front_service');
Route::get('/service-details', [FrontController::class, 'service_details'])->name('front_service_details');
Route::get('/project', [FrontController::class, 'project'])->name('front_project');
Route::get('/project-details', [FrontController::class, 'project_details'])->name('front_project_details');
Route::get('/blog', [FrontController::class, 'blog'])->name('front_blog');
Route::get('/blog-details', [FrontController::class, 'blog_details'])->name('front_blog_details');
Route::get('/blog-standard', [FrontController::class, 'blog_standard'])->name('front_blog_standard');
Route::get('/contact', [FrontController::class, 'contact'])->name('front_contact');
Route::get('/error', [FrontController::class, 'error'])->name('front_error');

/* FRONT ROUTE END */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* ADMIN ROUTE START */
Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::get('/dashboard', function () {return view('admin.home.index_home');})->name('dashboard');
        //home
        Route::get('/admin', [AdminHomeController::class, 'index'])->name('home_index');
        Route::post('/admin_home_create', [AdminHomeController::class, 'create'])->name('home_create');
        Route::post('/admin_home_update/{id}', [AdminHomeController::class, 'update'])->name('home_edit');
        Route::get('/admin_home_delete/{id}', [AdminHomeController::class, 'delete'])->name('home_delete');
        //home->features
        Route::get('/features_index', [AdminFeaturesController::class, 'index'])->name('features_index');
        Route::get('/features_create', [AdminFeaturesController::class, 'create'])->name('features_create');
        Route::post('/features_store', [AdminFeaturesController::class, 'store'])->name('features_store');
        Route::get('/features_edit/{id}', [AdminFeaturesController::class, 'edit'])->name('features_edit');
        Route::post('/features_update/{id}', [AdminFeaturesController::class, 'update'])->name('features_update');
        Route::get('/features_delete/{id}', [AdminFeaturesController::class, 'delete'])->name('features_delete');
        //home->pricing_plan
        Route::get('/pricing_index', [AdminPricingController::class, 'index'])->name('pricing_index');
        Route::get('/pricing_create', [AdminPricingController::class, 'create'])->name('pricing_create');
        Route::post('/pricing_store', [AdminPricingController::class, 'store'])->name('pricing_store');
        Route::get('/pricing_edit/{id}', [AdminPricingController::class, 'edit'])->name('pricing_edit');
        Route::post('/pricing_update/{id}', [AdminPricingController::class, 'update'])->name('pricing_update');
        Route::get('/pricing_delete/{id}', [AdminPricingController::class, 'delete'])->name('pricing_delete');
        //home->pricing_plan->plan
        Route::get('/plan_index', [AdminPlanController::class, 'index'])->name('plan_index');
        Route::get('/plan_create', [AdminPlanController::class, 'create'])->name('plan_create');
        Route::post('/plan_store', [AdminPlanController::class, 'store'])->name('plan_store');
        Route::get('/plan_edit/{id}', [AdminPlanController::class, 'edit'])->name('plan_edit');
        Route::post('/plan_update/{id}', [AdminPlanController::class, 'update'])->name('plan_update');
        Route::get('/plan_delete/{id}', [AdminPlanController::class, 'delete'])->name('plan_delete');
        //services
        Route::get('/services_index', [AdminServicesController::class, 'index'])->name('services_index');
        Route::get('/services_create', [AdminServicesController::class, 'create'])->name('services_create');
        Route::post('/services_store', [AdminServicesController::class, 'store'])->name('services_store');
        Route::get('/services_edit/{id}', [AdminServicesController::class, 'edit'])->name('services_edit');
        Route::post('/services_update/{id}', [AdminServicesController::class, 'update'])->name('services_update');
        Route::get('/services_delete/{id}', [AdminServicesController::class, 'delete'])->name('services_delete');
        //services->header_photo
        Route::post('/services_header_create', [AdminServicesController::class, 'create_header_photo'])->name('services_header_create');
        Route::post('/services_header_update/{id}', [AdminServicesController::class, 'update_header_photo'])->name('services_header_update');
        //about->about_us
        Route::get('/aboutus_index', [AdminAboutusController::class, 'index'])->name('aboutus_index');
        Route::post('/aboutus_create', [AdminAboutusController::class, 'create'])->name('aboutus_create');
        Route::post('/aboutus_update/{id}', [AdminAboutusController::class, 'update'])->name('aboutus_update');
        //about->whychoose
        Route::get('/whychoose_index', [AdminWhychooseController::class, 'index'])->name('whychoose_index');
        Route::post('/whychoose_create', [AdminWhychooseController::class, 'create'])->name('whychoose_create');
        Route::post('/whychoose_update/{id}', [AdminWhychooseController::class, 'update'])->name('whychoose_update');
        //projects
        Route::get('/projects_index', [AdminProjectsController::class, 'index'])->name('projects_index');
        Route::get('/projects_create', [AdminProjectsController::class, 'create'])->name('projects_create');
        Route::post('/projects_store', [AdminProjectsController::class, 'store'])->name('projects_store');
        Route::get('/projects_edit/{id}', [AdminProjectsController::class, 'edit'])->name('projects_edit');
        Route::post('/projects_update/{id}', [AdminProjectsController::class, 'update'])->name('projects_update');
        Route::get('/projects_delete/{id}', [AdminProjectsController::class, 'delete'])->name('projects_delete');
        //projects->header_photo
        Route::post('/projects_header_create', [AdminProjectsController::class, 'create_header_photo'])->name('projects_header_create');
        Route::post('/projects_header_update/{id}', [AdminProjectsController::class, 'update_header_photo'])->name('projects_header_update');
        //contact->header_photo
        Route::post('/contact_header_create', [AdminHomeController::class, 'create_contact_header_photo'])->name('contact_header_create');
        Route::post('/contact_header_update/{id}', [AdminHomeController::class, 'update_contact_header_photo'])->name('contact_header_update');
    });
});
/* ADMIN ROUTE END */

