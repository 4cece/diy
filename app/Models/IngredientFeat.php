<?php

namespace App\Models;

use App\Models\Feature;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IngredientFeat extends Model
{
    use HasFactory;

    public function feature() {

        return $this->belongsTo(Feature::class);
    }

    public function ingredient() {

        return $this->belongsTo(Ingredient::class);
    }
}
