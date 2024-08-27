<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\User\GeneratePlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::prefix('system')->name('system.')->group(function(){

    // for admin
    Route::prefix('admin')->name('admin.')->group(function(){

    });

       // for admin
    Route::prefix('user')->name('user.')->group(function(){

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/community', [App\Http\Controllers\HomeController::class, 'index'])->name('community');

        //services
        Route::prefix('services')->name('services.')->group(function(){
            Route::get('generate-plan',[GeneratePlanController::class,'index'])->name('generate-plan');
            Route::post('generate-plan',[GeneratePlanController::class,'generate'])->name('generate-plan.post');
            Route::get('generate-plan/result',[GeneratePlanController::class,'result'])->name('generate-plan.result');
        });

    });
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(Request $req){
});

Auth::routes();

