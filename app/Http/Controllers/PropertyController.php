<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Category;
use App\Photo;
Use App\User;
use App\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $properties = Property::all();
        

        return view('agent.hostels', compact('properties','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name','id')->all();

        return view('property.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $hostel = $request->all();

        $user = Auth::user();

        

    $property_id = $user->properties()->create($hostel)->id;


    //Store photo with obtained $property_id
        if($file= $request->file('photo_id')){

        $name = time().$file->getClientOriginalName();

        $file->move('images', $name);

        

        $photo = Photo::create(['path'=>$name,'property_id'=>$property_id]);


        }

        if($files2= $request->file('files')){
            foreach ($files2 as $file) {
                $name = time().$file->getClientOriginalName();

                $file->move('images', $name);
                $photo = Photo::create(['path'=>$name,'property_id'=>$property_id]);    
            }
        }



       $properties = $user->properties();
        


    return view('agent.index',compact('properties','user'));      


        //return dd($propId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $property = Property::findOrFail($id);
        $categories = Category::pluck('name','id')->all();

        return view('agent.property.edit',compact('property','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user= Auth::user();
        $property = $request->all();

        $propertyPhotos= Photo::where('Property_id',$id)->get();

        //return dd($propertyPhotos);
        //Update photo with $id
        if($file= $request->file('photo_id')){

        foreach ($propertyPhotos as $propertyPhoto) {

                    //delete photo from folder
                    unlink(public_path().$propertyPhoto['path']);

                    //delete photo record in db
                    Photo::where('property_id',$id)->delete();
                } 
                

                $name = time().$file->getClientOriginalName();

                $file->move('images', $name);

                

                $photo = Photo::where('property_id',$id)->update(['path'=>$name,'property_id'=>$id]);

        }
        
        if($files2= $request->file('files')){
            foreach ($files2 as $file) {
                $name = time().$file->getClientOriginalName();

                $file->move('images', $name);
                $photo = Photo::create(['path'=>$name,'property_id'=>$id]);    
            }
        }




        $user->properties()->whereId($id)->first()->update($property);

        

        return redirect('/property');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        
        // unlink(public_path().$property->photo->name);
        
        $property->delete();
       
        
        return redirect()->route('property.index');
    }
}
