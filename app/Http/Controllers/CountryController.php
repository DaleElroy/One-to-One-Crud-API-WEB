<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function destroy(Country $country){
        $country->delete();
        return redirect()->back()->with('message', 'The course has been deleted has successfully');
    }
}
