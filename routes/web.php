<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/arrays', function () {
    $names = ['john', 'jeff', 'Thomas'];

    foreach ($names as $name) {
        echo $name . ', ';
    }
});

Route::get('/variables', function () {

    /* variables and string */
    $myName = 'Jamie';
    $anotherName = 'John';
    $greeting = 'Ola';

    echo "Hello $myName"; // nesting in double quotes only when is a string
    echo 'Hello,' .$anotherName;

    echo $greeting . ','. $anotherName;


});
