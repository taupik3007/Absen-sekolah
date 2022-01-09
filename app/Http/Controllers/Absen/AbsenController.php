<?php

namespace App\Http\Controllers\Absen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Presence;

class AbsenController extends Controller
{
   public function index()
   {
   	
   	$user=User::With((['presences' => function ($q)  {
            $q->orderBy('created_at','desc');
        }]))->get();
  		$status = null;
   	 // dd($user);
   	return view('absen/absen-view',compact(['user','status']));
   }

   public function presence($id)
   {
   	// dd($id);
   	$presence= new Presence();
   	$presence->user_id = $id;
   	$presence->save();
   	return redirect('/');

   }

   public function checkout(Request $request)
   {
   	
   	$id=$request->input('user_id');
   	$date = $request->input('date');
   	$checkout=Presence::where('user_id',$id)->where('created_at',$date)->first();

   	$presence_id=$checkout->presece_id;

   	// dd($checkout);
   	$now = date('Y-m-d H:i:s');
   	$update= Presence::where('presece_id',$presence_id)->first();
    $checkout->checkout=$now;
   	$checkout->update();

   	return redirect('/');


   }
}
