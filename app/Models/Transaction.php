<?php

namespace App\Models;

use App\Models\Focus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'focus_id',
        'payer_name',
        'payer_contact',
        'email',
        'amount_paid',
        'payment_type',
        'reference',
        'ip_address',
        'verified',
        'currency',
        'vendor'
    ];

    public function focus()
    {
        return $this->belongsTo(Focus::class);
    }
}
