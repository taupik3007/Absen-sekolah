<?php

namespace App\Http\Controllers\Absen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Presence;
use Spatie\Permission\Traits\HasRoles;
// use Illuminate\Database\Eloquent\Builder::getRoleNames();


class AbsenController extends Controller
{
   public function index()
   {
   	
   	$role = Role::where('name','guru')->orWhere('name','management')->orWhere('name','staff')->get();
   	// dd($role);

   	$user=User::With((['presences' => function ($q)  {
            $q->orderBy('created_at','desc');
        }]))->role(['management','guru','staff'])->get();
  		$status = null;
   	 // dd($user);
   	return view('absen/absen-view',compact(['user','status','role']));
   }
    public function checkrole($role)
   {
  
   	$role_name = $role;
   	$role = Role::where('name','guru')->orWhere('name','management')->orWhere('name','staff')->get();
   	// dd($role);

   	$user=User::With((['presences' => function ($q)  {
            $q->orderBy('created_at','desc');
        }]))->role($role_name)->get();
   	

  		$status = null;
   	 // dd($user);
  		//sok cobaan
   	return view('absen/absen-view',compact(['user','status','role']));
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
