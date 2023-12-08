<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FoodItem;

class Donor extends Model
{
    use HasFactory;

    public function food(){
        return $this->belongsTo(FoodItem::class);
    }

}
