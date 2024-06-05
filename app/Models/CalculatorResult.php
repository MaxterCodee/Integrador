<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorResult extends Model
{
    use HasFactory;
    protected $table = 'calculator_results';
    protected $fillable = [
        'result',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
