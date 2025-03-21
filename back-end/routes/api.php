<?php

use App\Http\Controllers\api\user\create\UserCreate;
use Illuminate\Support\Facades\Route;

Route::post("user/create", [UserCreate::class, 'handle']);
Route::post("user/all", [UserCreate::class, 'handle']);
