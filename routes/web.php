<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\User\GeneratePlanController;
use App\Http\Controllers\User\OppunityController;
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
            Route::get('generate-plan/result',[GeneratePlanController::class,'result'])->name('generate-plan.result');
            Route::get('generate-plan/result/new',[GeneratePlanController::class,'new'])->name('generate-plan.result.new');
        });

        //oppunity
        Route::prefix('oppunity')->name('oppunity.')->group(function(){
            Route::get('/',[OppunityController::class,'index'])->name('index');
            Route::get('/create',[OppunityController::class,'create'])->name('create');
        });


    });
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(Request $req){
});

Auth::routes();

