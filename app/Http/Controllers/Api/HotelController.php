<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Slider;

class HotelController extends Controller
{
    public function getbanner(){
        $data=Slider::where('status',1)->get();
        foreach($data as $d){
            $d->image=url('uploads/banner/'.$d->image);
        }

        return response()->json(['status'=>true,'data'=>$data]);

    }

    public function gethotels(){
        $data=Hotel::where('status',1)->get();
        foreach($data as $d){
            $d->image=url('uploads/hotel/'.$d->image);
            $d->discount_percent=($d->discount_price*100)/$d->price;

        }

        return response()->json(['status'=>true,'data'=>$data]);

    }
}
