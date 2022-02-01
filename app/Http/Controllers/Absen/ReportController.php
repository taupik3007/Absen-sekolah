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
}
