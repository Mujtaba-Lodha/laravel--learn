<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

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

route::get('test', function (){

    echo "Hello from laravel ";
});

route::get('about', function (){

    echo "Hello ! welcome too about us pages";
});

route::get('tested', function (){

    return view('welcome');
});

//-----> using view direct

// firect view :-

route::view('homepage','home');

//using function :-
route::get('test', function (){

    return view('home');
});



//----> using controller

route:: get('processdata', [MyController::class, 'setData']);
route::get('profiles', [MyController::class, 'setName']);

route::get('names', [NameController::class, 'setProfile']);
