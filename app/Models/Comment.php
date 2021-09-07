<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use App\Models\Receipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function receipe(){
        return $this->belongsTo(Receipe::class);
    }
}
