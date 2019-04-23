<?php

Route::get('/',[
   'uses' => "HealthEducation@index",
    'as' =>'/'
]);
Route::get('/kids',[
    'uses' => "HealthEducation@categoryItem",
    'as' =>'kids'
]);
Route::get('/parents',[
    'uses' =>"HealthEducation@categoryItem1",
    'as'   =>'parents'
]);