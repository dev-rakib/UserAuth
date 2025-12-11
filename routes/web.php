<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('guest');
});

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', function(){
        $user = Auth::user();
        $users = User::all();
        return view('dashboard', [
            'user' => $user,
            'users' => $users
        ]);
    })->name('dashboard');

    
    Route::controller(ProfileController::class)->group(function(){
        Route::delete('/account/delete/{id}','destroy')->name('deleteprofile');
        Route::get('profile/edit/{id}', 'editpage')->name('editprofile');
        Route::patch('profile/update/{id}', 'update')->name('updateprofile');
        Route::get('profile/{id}', 'profile')->name('profile');
    });

});

Route::controller(SignupController::class)->group(function(){
    
    Route::get('/signup','signupview')->name('signup');
    Route::get('/signin','signinview')->name('login');
    
    Route::post('/signupcomplete','signupcomplete')->name('signupcomplete');
    Route::post('/signincomplete','signincomplete')->name('signincomplete');
    Route::post('/logout','logout')->name('logout');
});
