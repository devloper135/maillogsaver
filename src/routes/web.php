<?php

Route::group(['namespace' => 'Devloper135\Maillogsaver\Http\Controllers'], function () {
    Route::get('maillog', 'MaillogsaverController@index')->name('maillog');
    Route::post('maillog', 'MaillogsaverController@store');
});
