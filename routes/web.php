<?php
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'posts', 'namespace' => 'Posts'], function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    
    Route::get('/create', 'CreateController@show')->name('posts.create');
    Route::post('/create', 'CreateController@store')->name('posts.create.store');
    
    Route::get('/{slug}', 'PostController@show')->name('posts.post.show');

    Route::get('/{slug}/edit', 'EditController@find')->name('posts.post.edit');
    Route::post('/{slug}/edit', 'EditController@update')->name('posts.post.edit.update');

    Route::post('/{slug}/reviews', 'ReviewController@show')->name('posts.post.review.show');
    
    Route::post('/{slug}/category', 'CaregoryController@show')->name('posts.post.category.show');

    Route::post('/{slug}/vote', 'VoteController@update')->name('posts.post.vote.update');
});


Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('/sign-up', 'SignUpController@create')->name('auth.sign-up');
    Route::post('/sign-up', 'SignUpController@store')->name('auth.sign-up.store');

    Route::get('/sign-in', 'SignInController@create')->name('auth.sign-in');
    Route::post('/sign-in', 'SignInController@store')->name('auth.sign-in.auth');

    Route::get('/sign-out', 'SignOutController@signOut')->name('auth.sign-out.auth');
});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::post('/', 'AdminController@dashboard')->name('index');
    Route::get('auth/sign-in', 'SignInController@create')->name('signin');
    Route::post('auth/sign-in', 'SignInController@store')->name('signin.store');
    Route::get('auth/sign-out', 'SignInController@signout')->name('signout');

});

Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
    Route::get('/', 'UserController@index')->name('user.all');
    Route::get('/{slug}', 'UserController@find')->name('user.find');
});

Route::group(['prefix' => 'account', 'namespace' => 'Account'], function () {
    Route::post('/{slug}', 'UserEditeController@update')->name('account.update');
    Route::get('/{slug}', 'UserEditeController@edite')->name('account.show');

});

