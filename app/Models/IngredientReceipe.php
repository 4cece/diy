<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientReceipe extends Model
{
    use HasFactory;

    public function receipes() {

        return $this->belongsTo(Receipe::class);
    }

    public function ingredient() {

        return $this->belongsTo(Ingredient::class);
    }
}
