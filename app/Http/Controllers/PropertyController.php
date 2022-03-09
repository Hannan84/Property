<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id){
        $single_property = Property::findOrFail($id);

//        dd($single_property->gallery()->count());

        return view('property.single',[
            'single_property' => $single_property
        ]);
    }
}
