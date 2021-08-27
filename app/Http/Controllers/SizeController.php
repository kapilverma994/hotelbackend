<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Size::latest()->get();
       return view('admin.size.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.size.create');
    }
    public function status($type,$id){
        $res=Size::where('id',$id)->update(['status'=>$type]);
               if($res){
                   return redirect()->back()->with('success','Size Updated Successfully');
               }else{
                   return redirect()->back()->with('error','Oops Something Went Wrong!!');
               }
       
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
            'size'=>'required|unique:sizes,size',
       ]);
       $res= Size::create(['size'=>$request->size]);
       if($res){
           return redirect()->route('size.index')->with('success',"Size Created Successfully");
       }else{
           return redirect()->back()->with('erros','Something went wrong!!');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        $data=Size::findOrFail($size->id);
        return view('admin.size.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $request->validate([
            'size'=>'required|unique:sizes,size,'.$size->id,
       
        ]);

         $status=Size::where('id',$size->id)->update(['size'=>$request->size]);
         if($status){
            return redirect()->route('size.index')->with('success','Size Updated Successfully');
        }else{
         return redirect()->back()->with('error','Something went wrong!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $res=Size::findOrFail($size->id);
        $status=$res->delete();
        if($status){
            return redirect()->back()->with('success','Size Deleted Successfully');
        }else{
         return redirect()->back()->with('error','Something went wrong!!');
        }
    }
}
