<?php

namespace App\Models;

use App\Models\IngredientType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;

    public function ingredientType(){
        return $this->belongsTo(IngredientType::class);
    }
}
