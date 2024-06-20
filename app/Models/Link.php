<?php

namespace App\Models;

use App\Models\focus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'focus_id',
        'link'
    ];

    public function focus()
    {
        return $this->belongsTo(Focus::class, 'focus_id');
    }
}
