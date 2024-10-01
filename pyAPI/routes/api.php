<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
   
    Route::resource('estudiantes','api\v1\EstudiantesController');
    Route::post('estudiantes/{id}','api\v1\EstudiantesController@update');
    Route::delete('estudiantes/{id}','api\v1\EstudiantesController@destroy');    
});