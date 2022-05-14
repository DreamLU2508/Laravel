<?php

use App\Http\Controllers\MyController;
use App\Models\User;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('test', function(){
    return "xin chao";
})->name("route2");

Route::get('test/{ten}', function($ten){
    return "ten là: ".$ten;
})->where(['ten'=>'[0-9]+']);

Route::get('round', function()
{
    echo "xin chào chúng mày";
})->name("myround");

Route::get('goiround', function(){
    return redirect()->route("myround");
});

Route::get('goiController',[MyController::class, 'xinchao']);


Route::get('thamso/{ten}',[MyController::class, 'id']);