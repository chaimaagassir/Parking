<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function recherche()
    {
        $q = request()->input('q');

        $parking = Parking::where('name', 'like', "%$q%")
                 ->orwhere('description', 'like', "%$q%")
                 ->paginate(6);
        return view('parking.recherche')->with('parking', $parking);

    }
}
