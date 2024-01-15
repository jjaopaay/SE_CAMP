<?php
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\C_titles;

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
Route::resource('titles', C_titles::class);

Route::get('/my-controller',[MyController::class,'index']);
Route::get('/my-controller2','App\Htpp\Controllers\MtController@index');

Route::namespace('App\Htpp\Controllers')->group(function(){
    Route::get('\my-controller3','MyController@index');
});

Route::resource('/my-controller4','MyController');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-route',function(){
    $data=['val_a' => 'Hello World!'];
    $data['val_b'] = " Laravel";
   return view('myfolder.mypage',$data);
});
Route::post('/my-route',function(Request $req){
    $data['number'] = $req->input('number');
    return view('myroute',$data);
});
