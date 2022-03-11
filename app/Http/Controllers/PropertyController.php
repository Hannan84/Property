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


        $last_property = Property::latest();

        if (!empty($request->type)){
            $last_property = $last_property->where('type', $request->type);
        }
        $last_property = $last_property->paginate(12);

        return view('property.index',[
            'properties' => $last_property
        ]);
    }
}
