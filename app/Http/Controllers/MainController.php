<?php

namespace App\Http\Controllers;

use App\EquipmentCategory;
use App\EquipmentSubcategory;
use Illuminate\Http\Request;
use App\PortfolioImage;

class MainController extends Controller
{
    public function index(PortfolioImage $portfolioImage){
        $projects = $portfolioImage->all();
        return view('welcome', compact('projects'));
    }

    public function equipment(){
        return view('equipment');
    }

    public function portfolio(){
        return view('portfolio');
    }
    public function about(){
        return view('about');
    }
    public function sound_equipment(){
        return view('equipment.sound');
    }
    public function sound_equipment_acustic(){
        return view('equipment.acustic_systems');
    }
    public function test(EquipmentCategory $equipmentCategories){
        $categories = $equipmentCategories->orderBy('created_at', 'desc')->get();
        return view('test.equip', compact('categories'));
    }
    public function test_sub(EquipmentCategory $equipmentCategories, EquipmentSubcategory $subcategory, $alias){
        $categories = $equipmentCategories->orderBy('created_at', 'desc')->get();

        foreach ($categories as $cat){
            $seg = mb_strtolower(str_replace(" ", "-", $cat->en_name));
            if($seg == $alias){
                $category_id = $cat->id;
            }
        }


        $subcategory=$subcategory->all()->where('category_id', $category_id);
        return view('test.sub_equip', compact('categories', 'subcategory'));
    }
}