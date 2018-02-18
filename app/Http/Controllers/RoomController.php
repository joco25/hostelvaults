<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Category;
use App\Photo;
Use App\User;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        try{

            $room = $request->all();


        $user = Auth::user();

        $room['user_id']= $user->id;


    $room_id = $user->room()->create($room)->id;


    //Store photo with obtained $room_id
        if($file= $request->file('photo_id')){

        $name = time().$file->getClientOriginalName();

        $file->move('images', $name);

        

        $photo = Photo::create(['path'=>$name,'room_id'=>$room_id]);


        }

        if($files2= $request->file('files')){
            foreach ($files2 as $file) {
                $name = time().$file->getClientOriginalName();

                $file->move('images', $name);
                $photo = Photo::create(['path'=>$name,'room_id'=>$room_id]);    
            }
        }



       
        


    return view('user.index',compact('user')); 

        }catch( \Illuminate\Database\QueryException $ex ){
            return "You Cannot create more than one room";
        }

         
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
        $room = Room::findOrFail($id);
        $categories = Category::pluck('name','id')->all();

        return view('user.edit',compact('room','categories'));
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
             
           // $room = Input::except(['_method']);
            
            //$room = $request->all();

            $room = $request->except(['_method', '_token']);

            
            $user = Auth::user();

            $room['user_id']= $user->id;


        $user->room()->whereId($id)->first()->update($room);


        //Store photo with obtained $room_id
            if($file= $request->file('photo_id')){

            $name = time().$file->getClientOriginalName();

            $file->move('images', $name);

            

            $photo = Photo::create(['path'=>$name,'room_id'=>$room_id]);


            }

            if($files2= $request->file('files')){
                foreach ($files2 as $file) {
                    $name = time().$file->getClientOriginalName();

                    $file->move('images', $name);
                    $photo = Photo::create(['path'=>$name,'room_id'=>$room_id]);    
                }
            }



           
            


        return view('user.index',compact('user')); 

            

             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
