<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded=[];
    public function teachers(){
        return $this->belongstoMany(Teacher::class,'room_teacher');
    }
    public function books(){
        return $this->hasmany(Book::class);
    }
}
