<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $projects = ["ReactJS + Redux", "Laravel 5.3 - What's New",
        ["Project Structure", "\$loop", "Auth Changes", "Mailables", "Passport", "Pagination Improvements", "Elixir with Webpack"],
        "...and more"];
    return view('welcome', ['projects' => $projects]);
});
