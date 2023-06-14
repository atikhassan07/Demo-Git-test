<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\ProController;
use App\Models\Doctorinformation;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\DoctorinformationController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\FrontendController;

// use App\Http\Controllers\Admin\ProfileController;

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
// Frontend Routes 
Route::get('/', [FrontendController::class, 'index']);
Route::get('/doctor_view/{id}', [FrontendController::class, 'doctor_view'])->name('doctor.view');
Route::post('/getdoctor', [FrontendController::class, 'getdoctor']);
Route::get('/doctor_page', [FrontendController::class, 'doctor_page'])->name('doctor.page');

// Profile 
// Route::get('/', [ProController::class, 'index'])->name('profile.index');
Route::post('/profile_update', [ProController::class, 'profile_update'])->name('profile.update');

// Doctor 
Route::group(['prefix' => 'doctor'], function(){
    Route::get('/all_doctor', [DoctorinformationController::class, 'all_doctor'])->name('all.doctor');
    Route::get('/add_doctor', [DoctorinformationController::class, 'add_doctor'])->name('add.doctor');
    Route::post('/post_doctor', [DoctorinformationController::class, 'store_doctor'])->name('store.doctor');
    Route::get('/edit_doctor/{id}', [DoctorinformationController::class, 'edit_doctor'])->name('edit.doctor');
    Route::get('/delete_doctor/{id}', [DoctorinformationController::class, 'delete_doctor'])->name('delete.doctor');

});
// Hospital 
Route::group(['prefix' => 'hospital'], function(){
    Route::get('/all_hospital', [HospitalController::class, 'all_hospital'])->name('all.hospital');
    Route::post('/hospital_store', [HospitalController::class, 'hospital_store'])->name('store.hospital');
    Route::get('/hospital_delete/{id}', [HospitalController::class, 'hospital_delete'])->name('delete.hospital');

});
// Hospital Sub Branch 
Route::group(['prefix' => 'Subbranch'], function(){
    Route::get('/all_branch', [BranchController::class, 'all_branch'])->name('all.sub.branch');
    Route::post('/all_branch_store', [BranchController::class, 'all_branch_store'])->name('store.branch');
    Route::get('/branch_delete/{id}', [BranchController::class, 'branch_delete'])->name('delete.branch');

});
//diseas
Route::group(['prefix' => 'diseas'], function(){
    Route::get('/diseas', [DoctorController::class, 'diseas'])->name('all.diseas');
    Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('edit.diseas');
    Route::post('/add_diseas', [DoctorController::class, 'add_diseas'])->name('add.diseas');
    Route::get('/delete_diseas/{id}', [DoctorController::class, 'delete_diseas'])->name('delete.diseas');
});
// Doctor information
Route::post('/doctor_information', [Doctorinformation::class, 'doctorinformation'])->name('doctor_information');
// Route::post('/doctor_information', [Doctorinformation::class, 'doctorinformation'])->name('doctor_information');


// Slider 
Route::get('/all.slider', [SliderController::class, 'index'])->name('all.slider');
Route::get('/add.slider', [SliderController::class, 'add_new_slider'])->name('add.slider');
Route::post('/store.slider', [SliderController::class, 'store_slider'])->name('slider.store');
Route::get('/delete.slider/{id}', [SliderController::class, 'delete_slider'])->name('delete.slider');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Admin Route 
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

});