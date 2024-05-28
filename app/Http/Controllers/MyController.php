<?php

namespace App\Http\Controllers;

use App\Models\User;

class MyController extends Controller
{
    public function My($name)
    {
        // // response string
        // return response("Hello, $name!");


        // // header is a function that is used to set the header of the response
        // return response($name)
        //     ->header("name", $name)
        //     ->header("age", "24")
        //     ->header("city", "Dhaka");


        // json is a function that is used to return a JSON response
        $data = [
            "name" => $name
        ];
        return response()->json($data);
    }

    public function User()
    {
        // Simple array
        $simpleA = ["Adnan", "23", "Dhaka"];


        // Associative array (most common)
        $associative = [
            "name" => "Adnan",
            "age" => "23",
            "city" => "Dhaka"
        ];

        // Multidimensional array
        $multiDimArray = [
            ["name" => "John", "age" => 30, "city" => "New York"],
            ["name" => "Jane", "age" => 25, "city" => "Los Angeles"],
            ["name" => "Bob", "age" => 35, "city" => "Chicago"]
        ];

        return response()->json($associative);
    }





    public function First()
    {
        return response("First page");
    }

    public function Second()
    {
        return response("second page");
    }
}
