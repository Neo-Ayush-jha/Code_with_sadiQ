<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;    
use App\Http\Controllers\AdminController;    
use App\Http\Controllers\StudentController;    
use App\Http\Controllers\CourseController;    


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('homepages/home');
// });
Route::get('/' ,[HomeController::class,"index"])->name("homepage");
Route::get('/contact' ,[HomeController::class,"contact"])->name("contact");
Route::match(['get','post'],'/apply' ,[HomeController::class,"apply"])->name("apply");
Route::get('/courses' ,[HomeController::class,"courses"])->name("courses");
Route::match(["get","post"],'/online-payment' ,[HomeController::class,"onlinePayment"])->name("online-payment");
Route::post("/online-payment/make-payment",[HomeController::class,"makePayment"])->name("makePayment");
Route::post("/online-payment/call-back",[HomeController::class,"paymentCallback"])->name("callback");



Route::prefix("admin")->middleware(['auth'])->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");
    Route::get("/approve-student/{id}", [AdminController::class,'approveStudent'])->name("admin.approve.student");
    Route::get("/passout-student/{id}", [AdminController::class,'deleteStudent'])->name("admin.passout.student");
    Route::get("/make-cash-payment/{std_id}/{id}", [AdminController::class,'makeCashPayment'])->name("admin.make.cashpayment");
    Route::get("/manage/payment/due", [AdminController::class,'managePayment'])->name("admin.manage.payment.due");
    Route::get("/manage/payment/paid", [AdminController::class,'managePayment'])->name("admin.manage.payment.paid");
    Route::get("/manage/student",[StudentController::class,"index"])->name("admin.manage.student.active");
    Route::get("/manage/student/new",[StudentController::class,"newAdmission"])->name("admin.manage.student.new");
    Route::get("/manage/student/passout",[StudentController::class,"passOut"])->name("admin.manage.student.passout");
    Route::resource('course', CourseController::class); 
});
