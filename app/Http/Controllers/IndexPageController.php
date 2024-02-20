<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    
    function IndexView() {

        return view("index");

    }

}
