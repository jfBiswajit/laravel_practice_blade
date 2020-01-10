<?php

Route::get('/', 'tripController@home');

Route::get('/about', 'tripController@about');

Route::get('/trips', 'tripController@trips');

Route::get('/blog', 'tripController@blog');

Route::get('/contact', 'tripController@contact');
