<?php

namespace App\Models;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    public function ingredients() {

        return $this->belongsToMany(Ingredient::class, 'ingredient_feats');
    }
}
