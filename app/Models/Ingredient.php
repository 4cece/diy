<?php

namespace App\Models;

use App\Models\Feature;
use App\Models\IngredientFeat;
use App\Models\IngredientType;
use App\Models\IngredientReceipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;

    public function ingredientType(){
        return $this->belongsTo(IngredientType::class, 'ingredient_type_id');
    }

    public function Features() {

        return $this->belongsToMany(Feature::class, 'ingredient_feats');
    }
    
    public function receipes() {

        return $this->belongsToMany(Receipe::class, 'ingredient_receipes');
    }
}
