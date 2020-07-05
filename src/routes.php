<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'SergeyK89\testpackage\TestPackageController@add');
Route::get('subtract/{a}/{b}', 'SergeyK89\testpackage\TestPackageController@subtract');
