<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'focus_id',
        'link'
    ];

    public function focus()
    {
        return $this->belongsTo(focus::class);
    }
}
