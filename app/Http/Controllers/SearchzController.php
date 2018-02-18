<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Room;

use App\Http\Requests;

class SearchzController extends Controller
{
    
	 public function find(Request $request)
		{
		    // return Property::search($request->get('q'))->with('category')->get();

			return "great result";
		}

		public function searchrooms($query){
				$roomcount= Room::count();
         $rooms = Room::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('location', 'LIKE', '%' . $query . '%')
            ->orWhere('school', 'LIKE', '%' . $query . '%')
            ->paginate(9);

            return view('searchrooms',compact('rooms','roomcount'));

    }

    public function searchhostels($query){
        $hostelcount= Property::count();
         $properties = Property::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('location', 'LIKE', '%' . $query . '%')
            ->orWhere('school', 'LIKE', '%' . $query . '%')
            ->paginate(9);

            return view('searchproperties',compact('properties','hostelcount'));
    }
}
