<?php

use App\Http\Controllers\MenuController;
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
        // menu
        Route::get('menu',[MenuController::class,'index'])->name('menu.index');

    });
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(Request $req){
    $groqApiKey = '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';

    $response = Http::withHeaders([
        'Authorization' => "Bearer $groqApiKey",
        'Content-Type' => 'application/json',
    ])->post('https://api.groq.com/openai/v1/chat/completions', [
        'messages' => [
            [
                'role' => 'user',
                'content' => 'where is Tonle Sap Lake?',
            ],
        ],
        'model' => 'llama3-8b-8192',
    ]);

    if ($response->successful()) {
        $data = $response->json();
        dd($data);
        // return view('chat-completion', ['data' => $data]);
    } else {
        return 'Error: ' . $response->status();
    }
    //
});

Auth::routes();

