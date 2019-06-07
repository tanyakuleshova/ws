<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentSubcategory extends Model
{
    public function categoryId(){
        return $this->belongsTo(EquipmentCategory::class);
    }
}
