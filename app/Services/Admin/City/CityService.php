<?php

namespace App\Services\Admin\City;


use App\Models\Tour\City;

class CityService
{

    public function create($validated)
    {
       City::create($validated);

    }


}
