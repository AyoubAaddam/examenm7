<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StudentsController;

Route::get('/', function () {
    return view('welcome');
});
