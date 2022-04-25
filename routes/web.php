<?php

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

Route::middleware('auth')->name('admin.')->group(function () {

        // Dashboard
        Route::get('/', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

        // Customers
        Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'customers'])->name('customers');

        Route::get('/add-customers', [\App\Http\Controllers\CustomerController::class, 'add_customer'])->name('add_customer');
        Route::post('/add-customers-save', [\App\Http\Controllers\CustomerController::class, 'add_customer_save'])->name('add_customer_save');

        Route::get('/add-customers-detail', [\App\Http\Controllers\CustomerController::class, 'add_customer_detail'])->name('add_customer_detail');
        Route::post('/add-customers-detail-save', [\App\Http\Controllers\CustomerController::class, 'add_customer_detail_save'])->name('add_customer_detail_save');

        Route::get('/edit-customer/{customerId}', [\App\Http\Controllers\CustomerController::class, 'edit_customer'])->name('edit_customer');
        Route::post('/update-customer/{categoryId}', [\App\Http\Controllers\CustomerController::class, 'update_customer'])->name('update_customer');

        Route::get('/show-customer/{customerId}', [\App\Http\Controllers\CustomerController::class, 'show_customer'])->name('show_customer');

        Route::post('/delete-customer', [\App\Http\Controllers\CustomerController::class, 'delete_customer'])->name('delete_customer');

        // Sms
        Route::get('/sms', [\App\Http\Controllers\smsController::class, 'sms'])->name('sms');
        Route::post('/send-sms', [\App\Http\Controllers\smsController::class, 'send_sms'])->name('send_sms');

        // Job
        Route::get('/job', [\App\Http\Controllers\JobController::class, 'job'])->name('job');
        Route::get('/add-job', [\App\Http\Controllers\JobController::class, 'add_job'])->name('add_job');
        Route::post('/add-job-save', [\App\Http\Controllers\JobController::class, 'add_job_save'])->name('add_job_save');
        Route::get('/edit-job/{jobId}', [\App\Http\Controllers\JobController::class, 'edit_job'])->name('edit_job');
        Route::post('/update-job/{jobId}', [\App\Http\Controllers\JobController::class, 'update_job'])->name('update_job');
        Route::post('/delete-job', [\App\Http\Controllers\JobController::class, 'delete_job'])->name('delete_job');

        // How Know
        Route::get('/howknow', [\App\Http\Controllers\HowKnowController::class, 'howknow'])->name('howknow');
        Route::get('/add-howknow', [\App\Http\Controllers\HowKnowController::class, 'add_howknow'])->name('add_howknow');
        Route::post('/add-howknow-save', [\App\Http\Controllers\HowKnowController::class, 'add_howknow_save'])->name('add_howknow_save');
        Route::get('/edit-howknow/{howknowId}', [\App\Http\Controllers\HowKnowController::class, 'edit_howknow'])->name('edit_howknow');
        Route::post('/update-howknow/{howknowId}', [\App\Http\Controllers\HowKnowController::class, 'update_howknow'])->name('update_howknow');
        Route::post('/delete-howknow', [\App\Http\Controllers\HowKnowController::class, 'delete_howknow'])->name('delete_howknow');

        // Country
        Route::get('/ostan', [\App\Http\Controllers\CountryController::class, 'ostan'])->name('ostan');
        Route::get('/add-ostan', [\App\Http\Controllers\CountryController::class, 'add_ostan'])->name('add_ostan');
        Route::post('/add-ostan-save', [\App\Http\Controllers\CountryController::class, 'add_ostan_save'])->name('add_ostan_save');
        Route::get('/edit-ostan/{ostanId}', [\App\Http\Controllers\CountryController::class, 'edit_ostan'])->name('edit_ostan');
        Route::post('/update-ostan/{ostanId}', [\App\Http\Controllers\CountryController::class, 'update_ostan'])->name('update_ostan');
        Route::post('/delete-ostan', [\App\Http\Controllers\CountryController::class, 'delete_ostan'])->name('delete_ostan');

        // city
        Route::get('/city', [\App\Http\Controllers\CountryController::class, 'city'])->name('city');
        Route::get('/add-city', [\App\Http\Controllers\CountryController::class, 'add_city'])->name('add_city');
        Route::post('/add-city-save', [\App\Http\Controllers\CountryController::class, 'add_city_save'])->name('add_city_save');
        Route::get('/edit-city/{cityId}', [\App\Http\Controllers\CountryController::class, 'edit_city'])->name('edit_city');
        Route::post('/update-city/{cityId}', [\App\Http\Controllers\CountryController::class, 'update_city'])->name('update_city');
        Route::post('/delete-city', [\App\Http\Controllers\CountryController::class, 'delete_city'])->name('delete_city');

        // position
        Route::get('/position', [\App\Http\Controllers\CountryController::class, 'position'])->name('position');
        Route::get('/add-position', [\App\Http\Controllers\CountryController::class, 'add_position'])->name('add_position');
        Route::post('/add-position-save', [\App\Http\Controllers\CountryController::class, 'add_position_save'])->name('add_position_save');
        Route::get('/edit-position/{positionId}', [\App\Http\Controllers\CountryController::class, 'edit_position'])->name('edit_position');
        Route::post('/update-position/{positionId}', [\App\Http\Controllers\CountryController::class, 'update_position'])->name('update_position');
        Route::post('/delete-position', [\App\Http\Controllers\CountryController::class, 'delete_position'])->name('delete_position');

});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'LoginView'])->name('login');
Route::post('/loginprocess', [\App\Http\Controllers\LoginController::class, 'userLogin'])->name('loginprocess');

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('Login');
});



