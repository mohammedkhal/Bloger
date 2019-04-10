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


Route::group(['prefix' => 'articles', 'namespace' => 'Articles'], function () {
    Route::get('/', 'ArticlesController@index')->name('articles.index');
    
    Route::get('/create', 'CreateController@show')->name('articles.create');
    Route::post('/create', 'CreateController@store')->name('articles.create.store');
    
    Route::get('/{slug}', 'ArticlesController@show')->name('articles.article.show');

    Route::get('/{slug}/edit', 'EditController@show')->name('articles.article.edit');
    Route::post('/{slug}/edit', 'EditController@update')->name('articles.article.edit.update');

    Route::post('/{slug}/reviews', 'ReviewController@show')->name('articles.article.review.show');
    
    Route::post('/{slug}/category', 'CaregoryController@show')->name('articles.article.category.show');

    Route::post('/{slug}/vote', 'VoteController@update')->name('articles.article.vote.update');
});


Route::group(['prefix' => 'auth', 'namespace' => 'Authorization'], function () {
    Route::get('/sign-up', 'SignUpController@createUser')->name('auth.sign-up');
    Route::post('/sign-up', 'SignUpController@storeUser')->name('auth.sign-up.store');

    Route::get('/sign-in', 'SignInController@createLogin')->name('auth.sign-in');
    Route::post('/sign-in', 'SignInController@storeUser')->name('auth.sign-in.auth');

    Route::get('/sign-out', 'SignOutController@destroyUser')->name('auth.sign-out.auth');
});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::post('/', 'AdminController@dashboard')->name('index');
    Route::get('auth/sign-in', 'SessionsController@createLogin')->name('signin');
    Route::post('auth/sign-in', 'SessionsController@storeAdmin')->name('signin.store');
    Route::get('auth/sign-out', 'SessionsController@destroyUser')->name('signout');

});

Route::group(['prefix' => 'account', 'namespace' => 'Account'], function () {
    Route::get('/{username}', 'EditController@showUser')->name('account.show');
    Route::post('/', 'EditController@updateUser')->name('account.update');
    Route::get('/', 'UserController@allUser')->name('account.all');

});

