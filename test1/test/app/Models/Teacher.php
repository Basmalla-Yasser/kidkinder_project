<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded=[];
    public function subject(){
        return $this->belongsto(Subject::class);
    }
    public function rooms(){
        return $this->belongstoMany(Room::class,'room_teacher');
    }

}
