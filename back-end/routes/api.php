<?php

use App\Http\Controllers\api\user\create\UserCreateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("user/create", [UserCreateController::class, 'handle']);
