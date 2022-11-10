<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {

        /**
         * Get tokens for user
         * Not implemented yet
         */
        Route::get('/getTokens', 'HomeController@getTokens')->name('tokens');
        /**
         * Token generation
         */
        Route::post('/generateToken', 'HomeController@generateToken')->name('generateToken');
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});



// Route::get('/setup', function () {
//     $credentials = [
//         'email' => 'admin@admin.com',
//         'password' => 'password'
//     ];
//     if (!Auth::attempt($credentials)) {
//         $user = new \App\Models\User();
//         $user->name = 'Admin';
//         $user->email = $credentials['email'];
//         $user->password = Hash::make($credentials['password']);
//         $user->save();

//         if (Auth::attempt($credentials)) {
//             $user = Auth::user();

//             $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
//             $updateToken = $user->createToken('update-token', ['create', 'update']);
//             $basicToken = $user->createToken('basic-token');

//             return [
//                 'admin' => $adminToken->plainTextToken,
//                 'update' => $updateToken->plainTextToken,
//                 'basic' => $basicToken->plainTextToken,
//             ];
//         }
//     }
// });
