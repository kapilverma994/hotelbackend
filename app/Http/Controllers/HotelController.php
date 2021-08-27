<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Hotel::all();
       return view('admin.hotel.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:hotels',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description'=>'required',
            'price'=>'required',
            'deal'=>'required'
        ]);
        $data=new Hotel();
        $image = '';
        if ($request->hasfile('image')) {
            $file = $request->image;
            $name = 'hotel' . uniqid() . $file->getClientOriginalName();
            $location = 'uploads/hotel/';
            $file->move($location, $name);
            $image = $name;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->discount_price=$request->d_price;
        $data->image= $image;
        $data->deal=$request->deal;
        $data->save();
        return redirect()->route('hotel.index')->with('success','Hotel Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
        $data=Hotel::find($id);
      return view('admin.hotel.edit',compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description'=>'required',
            'price'=>'required',
            'deal'=>'required'
        ]);
        $data=Hotel::find($id);
      
        if ($request->hasfile('image')) {
            $file = $request->image;
            $name = 'hotel' . uniqid() . $file->getClientOriginalName();
            $location = 'uploads/hotel/';
            $file->move($location, $name);
            $image = $name;
            $data->image= $image;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->discount_price=$request->d_price;
      
        $data->deal=$request->deal;
        $data->save();
        return redirect()->route('hotel.index')->with('success','Hotel Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Hotel::findorfail($id);
        $data->delete();
        return redirect()->back()->with('success','Hotel Deleted Successfully');
    }
    public function status($type,$id){
        $res=Hotel::where('id',$id)->update(['status'=>$type]);
               if($res){
                   return redirect()->back()->with('success','Hotel Updated Successfully');
               }else{
                   return redirect()->back()->with('error','Oops Something Went Wrong!!');
               }
       
       }
}
