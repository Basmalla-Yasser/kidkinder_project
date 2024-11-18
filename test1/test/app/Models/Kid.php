<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $guarded=[];
    public function father(){
        return $this->belongsto(Father::class);
    }
}
