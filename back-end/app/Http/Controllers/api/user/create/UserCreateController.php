<?php

namespace App\Http\Controllers\api\user\create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserCreateController extends Controller
{

    public function handle(Request $request, Response $response)
    {
        print_r([$request]);
        return json_encode([
            "data" => "data"
        ]);
    }
}
