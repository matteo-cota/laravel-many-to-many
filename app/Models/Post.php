<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'genre', 'authors'];

    public function technologies()
{
    return $this->belongsToMany(Technology::class);
}

public function posts()
{
    return $this->belongsToMany(Post::class);
}
}