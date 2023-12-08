<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Recipient extends Model
{
    use HasFactory;
    public function food(){
        return $this->belongsTo(Food::class);
    }
}