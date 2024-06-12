<?php

use App\Http\Controllers\GoogleController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\Dashboard;
use App\Livewire\FocusForm;

Route::get('/', function () {
    // dd(User::where('id', auth()->id())->value('email'));
    return view('welcome')->with('username', auth()->id() ? User::where('id', auth()->id())->value('email') : 'Nobody man');
})->name('home');

Route::get('login', function() {
    return view('login');
})->name('login');

Route::post('login', [User::class, 'login']);

Route::get('register', function() {
    return view('signup');
})->name('register');

Route::post('register', function(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
   $user = User::firstOrNew($request->except(['_token']));
   $user->name = $request->input('email');
   $user->save();

   if(! auth()->attempt($request->only(['email', 'password']))){
        return redirect()->route('register');
   }
   return redirect()->route('dashboard');
});


// Google Logins
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');


// Logged in users access
Route::middleware('auth')->group(function(){
    // Route::resource('me', UserController::class);
    Route::get('me', Dashboard::class)->name('dashboard');
    Route::get('me/collect', FocusForm::class)->name('me.collect');

});

Route::get('/logout', function(){
    auth()->logout();
    return redirect()->route('home');
});

Route::fallback(function(){
    return 'WOrking on it';
});