<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("/");


//Route::get("/musteriler","MusteriController@index")->name("musteri.index");
//
//Route::get("/musteri","MusteriController@create")->name("musteri.create");
//
//Route::post("/musteri","MusteriController@store")->name("musteri.store");
//
//Route::delete("/musteri/{musteri}","MusteriController@destroy")->name("musteri.destroy");
//Route::get("/musteri/{musteri}","MusteriController@edit")->name("musteri.edit");
//Route::put("/musteri/{musteri}","MusteriController@update")->name("musteri.update");


// Yukarıdaki tüm yönlendirmelerin aynısını bu aşağıdaki kod satırı yapar.
Route::resource("musteri","MusteriController");
