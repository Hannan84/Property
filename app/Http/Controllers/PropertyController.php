<?php

namespace App\Http\Controllers;

use App\Models\Location;
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
        $locations = Location::select(['id','name'])->get();

        if (!empty($request->sale)){
            $last_property = $last_property->where('sale', $request->sale);
        }

        elseif (!empty($request->type)){
            $last_property = $last_property->where('type', $request->type);
        }
        elseif (!empty($request->location)){
            $last_property = $last_property->where('location_id', $request->location);
        }

        elseif (!empty($request->price)){

            if ($request->price == '100000'){
                $last_property = $last_property->where('price', '>',0)->where('price', '<=',100000);
            }
            elseif ($request->price == '200000'){
                $last_property = $last_property->where('price', '>',100000)->where('price', '<=',200000);
            }
            elseif ($request->price == '300000'){
                $last_property = $last_property->where('price', '>',200000)->where('price', '<=',300000);
            }
            elseif ($request->price == '400000'){
                $last_property = $last_property->where('price', '>',300000)->where('price', '<=',400000);
            }
            elseif ($request->price == '500000'){
                $last_property = $last_property->where('price', '>',400000)->where('price', '<=',500000);
            }
            elseif ($request->price == '500001'){
                $last_property = $last_property->where('price', '>',500001);
            }
        }

        elseif (!empty($request->bedrooms)){
            $last_property = $last_property->where('bedrooms', $request->bedrooms);
        }
        elseif (!empty($request->property_search)){
            $last_property = $last_property->where('name', 'LIKE', '%'.$request->property_search.'%');
        }
        $last_property = $last_property->paginate(12);

        return view('property.index',[
            'properties' => $last_property,
            'locations' => $locations
        ]);
    }
}
