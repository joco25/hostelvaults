<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where('id','>',0)->take(6)->latest()->get();
        $hostelcount= Property::count();

        $rooms = Room::where('id','>',0)->take(3)->latest()->get();
        
        return view('home',compact('properties','rooms','hostelcount'));
    }
}
