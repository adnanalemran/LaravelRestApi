<?php

// $router->get('/{name}', 'MyController@My');
$router->get('/', 'MyController@User');

<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
=======
$router->get('/First', 'RedirectController@First');
$router->get('/Second', 'RedirectController@Second');
$router->get('/download', 'RedirectController@download');
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16
