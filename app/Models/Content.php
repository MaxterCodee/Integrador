<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = 'contents';
    protected $fillable = [
        'head',
        'title',
        'subtitle',
        'body',
        'post_id',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
