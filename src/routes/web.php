<?php

Route::group(['namespace' => 'Akshay\Maillogsaver\Http\Controllers'], function () {
    Route::get('maillog', 'MaillogsaverController@index')->name('maillog');
    Route::post('maillog', 'MaillogsaverController@store');
});