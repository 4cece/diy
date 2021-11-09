<?php

namespace App\Models;

use App\Models\Step;
use App\Models\User;
use App\Models\Level;
use App\Models\IngredientReceipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receipe extends Model
{
    use HasFactory;
  

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function level(){
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments() {

        return $this->hasMany(Comment::class);
    }

    public function ingredients(){

        return $this->belongsToMany(Ingredient::class, 'ingredient_receipes')->withPivot('quantity');
    }

    public function steps(){

        return $this->hasMany(Step::class);
    }

    protected $guarded = [];

}
