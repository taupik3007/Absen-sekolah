<?php

namespace App\Http\Controllers\Absen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Presence;

class ReportController extends Controller
{
    public function index()
    {
    	// $now= now();
    	// dd($now);
		$user=User::With((['presences' => function ($q)  {
        $q->orderBy('created_at','desc')->whereDate('created_at',now());
        }]))->role(['management','guru','staff'])->get();
  		$status = null;    	
    	$tanggal = date('d:m:Y');
    	// dd($user);
    	// dd($tanggal);
    	return view('absen/report',compact(['tanggal','user']));
    }

    public function monthlyReport()
    {   
        $user=User::With((['presences' => function ($q)  {
        $q->orderBy('created_at','desc')->whereDate('created_at',now());
        }]))->role(['management','guru','staff'])->get();
        $status = null;     
        $tanggal = date('d:m:Y');
        return view('absen.monthly_report',compact(['tanggal','user']));
    }
    public function image(Request $request,$id)
    {
        // dd($id);


        $this->validate($request,[
            'image' => 'required|mimes:jpg,jpeg,png',

        ]);

        $file_name=$request->image->getClientOriginalName();
        $image=$request->image->storeAs('image', $file_name);
         $update= User::whereId($id)->update([
            'image'=> $image,
         ]);
        // dd($update);
         if($update){
         dd('berhasil');
     }else{
        echo "gagal";
     }

    }
}
