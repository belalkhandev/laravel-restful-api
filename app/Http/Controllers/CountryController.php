<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    //
    public function country()
    {
        return response()->json(Country::get(), 200);
    }

    public function countryId($id)
    {
        return response()->json(Country::find($id), 200);
    }

    public function storeCountry(Request $request)
    {
        // $this->validate($request, [
        //     'iso' => 'required'
        // ]);
        $country = Country::create($request->all());

        return response()->json($country, 201);
    }

    public function updateCountry(Request $request, $id)
    {
        $country = Country::find($id);
        $country->update($request->all());

        return response()->json($country, 200);
    }
}
