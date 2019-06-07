<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentCategory extends Model
{
    public function subcategories(){
//        return $this->hasMany(EquipmentSubcategory::class, 'category_id')->orderBy('id', 'DESC');
        return $this->hasMany(EquipmentSubcategory::class, 'category_id');
    }

}
