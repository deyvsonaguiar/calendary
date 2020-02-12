<?php

Route::get('/', 'FullcalendarController@index')->name('index');

Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');



