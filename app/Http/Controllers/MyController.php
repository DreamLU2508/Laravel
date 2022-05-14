<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinchao(){
        echo "xin chào";
    }

    public function id($ten)
    {
        echo "em tên là: ".$ten;
        return redirect()->route("route2");
    }
}
