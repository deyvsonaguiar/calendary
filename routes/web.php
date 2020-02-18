<?php

Route::get('/', 'FullcalendarController@index')->name('index');

Route::get('load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::put('update-event', 'EventController@update')->name('routeUpdateEvent');

Route::post('store-event', 'EventController@store')->name('routeStoreEvent');

Route::delete('delete-event', 'EventController@destroy')->name('routeDeleteEvent');


//eventos rápidos

Route::delete('fast-delete-event', 'FastEventController@destroy')->name('routeFastDeleteEvent');

Route::put('fast-update-event', 'FastEventController@update')->name('routeFastUpdateEvent');

Route::post('fast-store-event', 'FastEventController@store')->name('routeFastStoreEvent');












