<?php

namespace App\Models;

use App\Models\User;
use App\Models\Level;
use App\Models\IngredientReceipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receipe extends Model
{
    use HasFactory;

    public function user() {

        return $this->hasMany(User::class);
    }

    public function level() {

        return $this->hasMany(Level::class);
    }

    public function comment() {

        return $this->hasMany(Comment::class);
    }

    public function IngredientReceipe() {

        return $this->hasmany(IngredientReceipe::class);
    }
}
