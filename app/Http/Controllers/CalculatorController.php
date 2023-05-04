<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculatefunc(Request $request)
    {
        echo "Successfully Connected vie and controller";
    }
}