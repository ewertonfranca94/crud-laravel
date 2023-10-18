<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes; // Importe a trait SoftDeletes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','content','author'
    ];

    use SoftDeletes;
    use HasFactory;
}
