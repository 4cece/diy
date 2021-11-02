<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Receipe;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    public function articles() {

        return $this->hasMany(Article::class);
    }

    public function comments() {

        return $this->hasMany(Comment::class);
    }

    public function receipes() {

        return $this->hasMany(Receipe::class);
    }

    public function ingredients() {

        return $this->belongsToMany(Ingredient::class, 'ingredient_boxes');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
