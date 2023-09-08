<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Models\Core\Tour;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MainController extends Controller
{
    function index():View{
        $re = Tour::all();
         $e= 123;
        return view('tour.index' ,compact(['e', 're']));
    }
}
