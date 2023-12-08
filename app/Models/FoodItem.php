<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Donor;
use App\Models\Recipient;

class FoodItem extends Model
{
    use HasFactory;
    public function food(){
        return $this->hasMany(Donor::class);
    }
    public function recipient(){
        return $this->hasMany(Recipient::class);
    }
}
