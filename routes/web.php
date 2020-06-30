<?php

Route::get('/', 'WelcomeController@index');

Route::get('/imprint', 'ImprintController@index');

Route::get('/domain/{domain?}', 'DomainController@index');
