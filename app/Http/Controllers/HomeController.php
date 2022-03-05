<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $last_property = Property::latest()->get()->take(4);
        return view('welcome',[
            'properties' => $last_property
        ]);
    }
}
