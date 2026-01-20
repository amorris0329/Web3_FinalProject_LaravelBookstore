<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    protected $fillable = ['title', 'image', 'imageAlt', 'description', 'date'];
    /** @use HasFactory<\Database\Factories\FeaturedFactory> */
    use HasFactory;
}
