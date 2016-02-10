<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*
Route::get('/', [
    'middleware' => 'auth',
    'uses' => 'HomeController@index'
]);
*/


Route::get('about', ['as' => 'about', function () {
    echo "ASdasd";
}]);
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    // Authentication Routes...$
    Route::get('login', [
      'as' => 'login', 
      'uses' => 'Auth\AuthController@showLoginForm'
    ]);
    
    Route::post('login', [
      'as' => 'login', 
      'uses' => 'Auth\AuthController@login'
    ]);
    
    Route::post('logout', [
      'as' => 'login', 
      'uses' => 'Auth\AuthController@logout'
    ]);
   
    // Registration Routes...$
    Route::get('register', [
      'as' => 'register', 
      'uses' => 'Auth\AuthController@showRegistrationForm'
    ]);
    
    Route::post('register', [
      'as' => 'register', 
      'uses' => 'Auth\AuthController@register'
    ]);
   
    // Password Reset Routes...$
    Route::get('password/reset/{token?}', [
      'as' => 'password/reset', 
      'uses' => 'Auth\PasswordController@showResetForm'
    ]);
    
    Route::post('password/email', [
      'as' => 'password/email', 
      'uses' => 'Auth\PasswordController@sendResetLinkEmail'
    ]);
    
    Route::post('password/reset', [
      'as' => 'password/reset', 
      'uses' => 'Auth\PasswordController@reset'
    ]);
    
    Route::get('/', 'HomeController@index');
    Route::get('/dash',[
      'as' => 'dash', 
      'uses' => 'DashboardController@index'
    ]);
});


Route::get('mail', function() {
    $to = 'sangjun@psinc.jp';
    $subject = 'Studying sending email in Laravel';
    $data = [
        'title' => 'Hi there',
        'body'  => 'This is the body of an email message',
        'user'  => App\User::find(1)
    ];

    return Mail::send('emails.welcome', $data, function($message) use($to, $subject) {
        $message->to($to)->subject($subject);
    });
});
