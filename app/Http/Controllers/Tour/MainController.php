<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MainController extends Controller
{
    function index():View{
         $e= 123;
        return view('tour.index' ,compact('e'));
    }
}
