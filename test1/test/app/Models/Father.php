<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    protected $guarded=[];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function contacts(){
        return $this->hasmany(Contact::class);
    }
    public function kids(){
        return $this->hasmany(Kid::class);
    }
    public function comments(){
        return $this->hasmany(Comment::class);
    }
}
