<?php

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



Route::get('/home', function () {

    $title = "Questa è la mia homepage!";
    $pre = "Questa è una semplicissima homepage creata con Laravel";
    $home ="Home";
    $features = "caratteristiche";
    $portfolio = "portfolio";
    $others = "progetti";
    $descrizione = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
     Ex laborum ipsum quam id, facilis rerum officia velit numquam a amet officiis necessitatibus mollitia vel odit ad molestiae labore nostrum nihil!";


    return view('home',
    [
        "titolo" => $title,
        "presentazione" => $pre,
        "home" => $home,
        "caratteristiche" =>$features,
        "portfolio" => $portfolio,
        "progetti" => $others,
        "descrizione" => $descrizione,

    ]
);
});