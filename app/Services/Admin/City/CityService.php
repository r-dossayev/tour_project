<?php

namespace App\Services\Admin\City;


use App\Models\Core\City;

class CityService
{

    public function create($validated)
    {
       City::create($validated);

    }


}
