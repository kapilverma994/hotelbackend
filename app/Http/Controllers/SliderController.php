<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Slider::all();
        return view('admin.banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'title'=>'unique:sliders',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $data=new Slider();
        $image = '';
        if ($request->hasfile('image')) {
            $file = $request->image;
            $name = 'banner' . uniqid() . $file->getClientOriginalName();
            $location = 'uploads/banner/';
            $file->move($location, $name);
            $image = $name;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->image= $image;
        $data->save();
        return redirect()->route('banner.index')->with('success','Banner Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Slider::find($id);
      return view('admin.banner.edit',compact('data'));
    }

    public function status($type,$id){
        $res=Slider::where('id',$id)->update(['status'=>$type]);
               if($res){
                   return redirect()->back()->with('success','Banner Updated Successfully');
               }else{
                   return redirect()->back()->with('error','Oops Something Went Wrong!!');
               }
       
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
       
            'image'=>'mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
      $data=Slider::find($id);

    if ($request->hasfile('image')) {
        $file = $request->image;
        $name = 'banner' . uniqid() . $file->getClientOriginalName();
        $location = 'uploads/banner/';
        $file->move($location, $name);
        $image = $name;
        $data->image= $image;
    }
    $data->title=$request->title;
    $data->description=$request->description;
 
    $data->save();
    return redirect()->route('banner.index')->with('success','Banner Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Slider::findorfail($id);
        $data->delete();

        return redirect()->back()->with('success','Banner Deleted Successfully');
    }
}
