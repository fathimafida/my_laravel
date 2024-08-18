<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static $age = 10;

    public function dummy()
    {
    $sum =5+5;
        return "<h1> sum is" . $sum . "</h1>";
    }
}
