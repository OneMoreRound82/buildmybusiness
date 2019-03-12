<?php



Route::get('/{any}', function () {
    return view('landing');
})->where('any', '.*');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
