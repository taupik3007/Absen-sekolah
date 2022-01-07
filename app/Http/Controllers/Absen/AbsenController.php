<?php

namespace App\Http\Controllers\Absen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AbsenController extends Controller
{
   public function index()
   {
   	$user=User::role('guru')->get();
   	return view('absen/absen-view',compact(['user']));
   }
}
