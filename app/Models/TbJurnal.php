<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

class TbJurnal extends Model
{
    use HasFactory;
    protected $table = "tb_jurnals";

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->role_id == 2){
            return $query->where('id_user', Auth::user()->id);
        }
    }

}
