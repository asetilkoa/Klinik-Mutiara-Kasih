<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleKarir extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','author','content','status','category_id'];
}
