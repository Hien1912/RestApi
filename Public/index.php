<?php

include_once dirname(__DIR__, 1) . "/vendor/autoload.php";

use Core\Route;

Route::get("/", "HomeController@getAll");
Route::get("/id", "HomeController@findById");
