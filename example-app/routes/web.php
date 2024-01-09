<?php

use App\Http\Controllers\MyController;
use Illuminate\Http;
use Illuminate\Http\Request;
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

Route::get('my-controller',[MyController::class, 'index']);
Route::get('my-controller2','App\Http\Controllers\MyController@index');
Route::get('my-controller3',[MyController::class, 'index']);

Route::get('/', function () {
    return view('myfolder.welcome'); //welcome.blade.php
});

Route::get('/my-route' , function (){
    //return view('myroute');
    $data = ['val_a' => 'Hello World!'];
return view('myfolder.mypage',$data);
});

Route::post('/my-route', function(Request $req) {
$data['myinput'] =  $req -> input('myinput');
return view('myfolder.myroute', $data);
});
