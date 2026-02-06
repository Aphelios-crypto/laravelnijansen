<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    public function index()
    {
        $teamNumber = "3"; // Palitan mo ito ng inyong Team Number
        return view('hello', ['team' => $teamNumber]);
    }
}