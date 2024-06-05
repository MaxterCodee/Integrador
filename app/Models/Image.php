<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'url_img',
        'content_id',
    ];
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
