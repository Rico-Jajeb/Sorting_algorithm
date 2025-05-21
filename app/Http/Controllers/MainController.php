<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main_page(){

        $ab = 'hahah';
        $i = 10;
        return view('MainPage', [ 'ab' => $ab, 'i' => $i ] );
    }
}
