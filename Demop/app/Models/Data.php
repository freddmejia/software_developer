<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = "data";
    protected $fillable = [
        'category_id',
        'author',
        'title',
        'description',
        'url',
        'source',
        'image',
        'category',
        'country',
        'published_at',
    ];

}
