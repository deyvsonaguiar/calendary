<?php

Route::get('/', 'FullcalendarController@index')->name('index');

Route::get('load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::put('update-event', 'EventController@update')->name('routeUpdateEvent');

Route::post('store-event', 'EventController@store')->name('routeStoreEvent');

Route::delete('delete-event', 'EventController@destroy')->name('routeDeleteEvent');









