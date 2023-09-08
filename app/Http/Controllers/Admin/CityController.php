<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityRequest;
use App\Services\Admin\City\CityService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function createView(){
        return view('admin.city.create_form');
    }

    function create(CityRequest $request, CityService $cityService){
        $cityService->create($request->validated());
        return redirect()->route('admin.city.create.view');
    }
}
