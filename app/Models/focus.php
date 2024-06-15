<?php

namespace App\Models;

use App\Models\Link;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function paymentLink()
    {
        return $this->hasOne(Link::class);
    }

}
