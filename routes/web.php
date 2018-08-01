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
use Illuminate\Support\Facades\Route;

Route::get('Modules/{module}/assets/{type}/{file}', [ function ($module, $type, $file) {
    //dd('hola');
    $module = ucfirst($module);
    
    $path = base_path("Modules/$module/Resources/assets/$type/$file");
    
    if($type == 'js'){
        return response()->file($path, array('Content-Type' => 'application/javascript'));
    }else
        if($type == 'css'){
            return response()->file($path, array('Content-Type' => 'text/css'));
    }
    else{
        return response()->file($path);
    }
    
    return response()->json([$path], 408);
}]);

Route::get('/', function () {
    return view('welcome');
});
