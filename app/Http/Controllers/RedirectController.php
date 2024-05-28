<?php

namespace App\Http\Controllers;

use App\Models\User;

class RedirectController extends Controller
{
    public function First()
    {
        return redirect('/Second');
    }

    public function Second()
    {
        return response("second page");
    }

    public function download()
    {
        $path = 'demo.txt';
        return response()->download($path);
    }
}
