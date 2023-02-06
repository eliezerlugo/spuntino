<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\http\Controllers\SpuntinoController;

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

//Route::get('/', function () {
//   return view('welcome');
//   //return "BIENVENIDO  A  SPUNTINO.MERENDA";
//});
//Route::get('image/create', function () {
//   return "En esta página podrás insertar las imagenes";
//});

/*Route::get('image/{imagenes}',function($imagenes){
   return "Welcome a la galeria de   $imagenes";
});
Route::get('image/{img}/{cat?}',function($img, $cat=null){
if ($cat){
   return "Bienvenido a la página de $img, de la   categoria $cat";
}else{
   return "Welcome a la galeria de   $img";
}
*/


Route::get('/',HomeController::class);

Route::get('image/index', [SpuntinoController::class, 'index']);
Route::get('image/create', [SpuntinoController::class, 'create']);
Route::get('image/{img}/{categoria?}', [SpuntinoController::class, 'show']);


//Route::controller(SpuntinoController::class)->group(function(){
//    Route::get('image', 'index');
//    Route::get('image/create','create');
//    Route::get('image/{img}/{categoria?}', 'show');
//});
