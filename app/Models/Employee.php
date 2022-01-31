<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    public function scopeTop5($query, $count=5){
        return $query->orderBy('raiting','desc')->take($count)->get();
        
    }
}
