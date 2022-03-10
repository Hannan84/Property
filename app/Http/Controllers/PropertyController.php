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

    public function index(Request $request){
        $last_property = Property::latest()->where('type', $request->type)->paginate(12);
        return view('property.index',[
            'properties' => $last_property
        ]);
    }
}
