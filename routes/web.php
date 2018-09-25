<?php
Route::get('/','HomeController@index');
//posts 
Route::resource('posts','PostsController');
//categories
Route::resource('categories', 'CategoryController');
//nutrition
Route::resource('nutrition', 'NutritionController');
//livelihoods
Route::resource('livelihoods', 'LivelihoodController');
//wash
Route::resource('wash', 'WashController');
//health
Route::resource('health', 'HealthController');
//protection
Route::resource('protection', 'ProtectionController');
//funding
Route::resource('funding', 'FundingController');

//comments

Route::post('/posts/{id}/comments', 'CommentController@store');

//complaint form

Route::resource('complaints', 'ComplaintController');

//authentication
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('sessions.login');

Route::post('/login', 'SessionsController@store')->name('login');

Route::post('/logout', 'SessionsController@destroy')->name('logout');