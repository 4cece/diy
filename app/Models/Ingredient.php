<?php

namespace App\Models;

use App\Models\IngredientFeat;
use App\Models\IngredientType;
use App\Models\IngredientReceipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;

    public function ingredientType(){
        return $this->belongsTo(IngredientType::class);
    }

    public function ingredientFeature() {

        return $this->hasmany(IngredientFeat::class);
    }
    
    public function IngredientReceipe() {

        return $this->hasmany(IngredientReceipe::class);
    }
}
