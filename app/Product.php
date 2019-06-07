<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subcategoryId(){
        return $this->belongsTo(EquipmentSubcategory::class);
    }
}
