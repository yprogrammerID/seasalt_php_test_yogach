<?php

namespace App\Http\Controllers;

use App\Jobs\MyLooping;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $string = "QWERTYUIOP";
        $string = strrev($string);
        return response($string, 200)
            ->header('Content-Type', 'text/plain');
    }

    public function looping()
    {
        $looping = new MyLooping();
        $this->dispatch($looping);
        return response()->json(["message" => "Run on background!"], 200);
    }
}
