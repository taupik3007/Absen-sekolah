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
   	
   	$user=User::with('presences')->get();
   	 // dd($user);
   	return view('absen/absen-view',compact(['user']));
   }

   public function presence($id)
   {
   	// dd($id);
   	$presence= new Presence();
   	$presence->user_id = $id;
   	$presence->save();
   	return redirect('/');

   }
}
