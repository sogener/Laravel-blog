<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public static function getAboutPage(){
        return [
            ['name' => 'Hodor', 'position' => 'programmer'],
            ['name' => 'Joker', 'position' => 'CEO'],
            ['name' => 'Elvis', 'position' => 'CTO'],
        ];
    }
}
