<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/yachts/{status}', [HomeController::class, 'yachts'])->name('yachts');
Route::get('/yachtdetails/{id}/', [HomeController::class, 'yachtdetails'])->name('yachtdetails');
Route::get('/yachtimages/{id}', [HomeController::class, 'yachtimages'])->name('yachtimages');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/underconstruction', [HomeController::class, 'underconstruction'])->name('underconstruction');
Route::get('/undercons_images/{id}', [HomeController::class, 'undercons_images'])->name('undercons_images');

//tr
Route::prefix('tr')->group(function(){
    Route::get('/', [HomeController::class, 'indextr'])->name('hometr');
    Route::get('/yachts/{status}', [HomeController::class, 'yachtstr'])->name('yachtstr');
    Route::get('/yachtdetails/{id}/', [HomeController::class, 'yachtdetailstr'])->name('yachtdetailstr');
    Route::get('/yachtimages/{id}', [HomeController::class, 'yachtimagestr'])->name('yachtimagestr');
    Route::get('/about', [HomeController::class, 'abouttr'])->name('abouttr');
    Route::get('/contact', [HomeController::class, 'contacttr'])->name('contacttr');
    Route::get('/underconstruction', [HomeController::class, 'underconstructiontr'])->name('underconstructiontr');
    Route::get('/undercons_images/{id}', [HomeController::class, 'undercons_imagestr'])->name('undercons_imagestr');
});



//Admin
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    #Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    #Message
    Route::prefix('messages')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');

    });

    #Image Gallery
    Route::prefix('image')->group(function(){
        Route::get('create/{yacht_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{yacht_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{yacht_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    #Yacht
    Route::prefix('yacht')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\YachtController::class,'index'])->name('admin_yachts');
        Route::get('create',[\App\Http\Controllers\Admin\YachtController::class,'create'])->name('admin_yacht_add');
        Route::post('store',[\App\Http\Controllers\Admin\YachtController::class,'store'])->name('admin_yacht_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\YachtController::class,'edit'])->name('admin_yacht_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\YachtController::class,'update'])->name('admin_yacht_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\YachtController::class,'destroy'])->name('admin_yacht_delete');
        Route::get('show',[\App\Http\Controllers\Admin\YachtController::class,'show'])->name('admin_yacht_show');

    });

    #Yacht
    Route::prefix('underconstruction')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\UnderconsController::class,'index'])->name('admin_underconstruction');

            Route::get('create/{yacht_id}',[\App\Http\Controllers\Admin\UnderconsController::class,'create'])->name('admin_undercons_add');
            Route::post('store/{yacht_id}',[\App\Http\Controllers\Admin\UnderconsController::class,'store'])->name('admin_undercons_store');
            Route::get('delete/{id}/{yacht_id}',[\App\Http\Controllers\Admin\UnderconsController::class,'destroy'])->name('admin_undercons_delete');
            Route::get('show',[\App\Http\Controllers\Admin\UnderconsController::class,'show'])->name('admin_undercons_show');

    });

});

Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
