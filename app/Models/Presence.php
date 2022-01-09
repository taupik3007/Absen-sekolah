<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'presece_id';

    public function users()
    {
    	return $this->belongsTo(User::class);
    }
}
