<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class focus extends Model
{
    use HasFactory;
    protected $table = 'focus';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'desired_amount',
        'end_date',
        'cost',
        'tags'
    ];

}
