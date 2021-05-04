<?php

Route::group(['namespace' => 'shawon3719\Communication\Http\Controllers'], function () {

    Route::get('communication', 'CommunicationsController@index')->name('communication');
    Route::post('communication', 'CommunicationsController@send')->name('communication.send');

});