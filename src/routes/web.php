<?php

Route::group(['namespace' => 'Shawon\Communication\Http\Controllers'], function () {

    Route::get('communication', 'CommunicationsController@index')->name('communication');
    Route::post('communication', 'CommunicationsController@send')->name('communication.send');

});