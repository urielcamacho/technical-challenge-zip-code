<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZipCodeResource;
use App\Models\ZipCode;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{
    /**
     * Displays a zip code resource.
     * 
     * @param  App\Models\ZipCode $zipCode
     * 
     * @return App\Http\Resources\ZipCodeResource
     */
    public function show(ZipCode $zipCode)
    {
        return new ZipCodeResource($zipCode);
    }
}
