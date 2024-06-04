<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        return response()->json([
            "status" => 200,
            "message" => "Hello World",
        ]);
    }
    public function store(Request $request)
    {

        
        return response()->json([
            'form_request' => $request->all(),
        ]);
    }

}
