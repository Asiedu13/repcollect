<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', function() {
    return view('login');
})->name('login');

Route::post('login', function(Request $request) {
     $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (! auth()->attempt($request->except('_token'))) {
        return redirect()->back();
    }
    return redirect()->route('me.index')->with('user', auth()->user());
});

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
   return redirect()->route('me.index');
});

Route::middleware('auth')->group(function(){
    Route::resource('me', UserController::class );
});

Route::get('/logout', function(){
    auth()->logout();
    return redirect()->route('home');
});