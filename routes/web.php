<?php

use App\Http\Controllers\HomeController;
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




Route::get('/',[HomeController::class,'index'])->name('home.index');



Route::get('r1', function() {
    return redirect('r2');
});

Route::get('r2', function() {
    return  view('welcome');
});


Route::get('hello/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);

Route::get('Hi/{name}',function($name){
    return'Hello,'.$name;
});

Route::get('dashboard',function(){
    return'dashboard';
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('dashboard',function(){
        return'admin dashboard';
    });
});

/*Route::get('/',['as' => 'home.index','uses' => 'HomeController@index']);*/

