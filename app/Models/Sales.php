<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_name',
        'costumer_name',
        'form_payment',
        'price',
        'installments',
        'due_date',
    ];

    public  function user()
    {
        return $this->belongsTo(User::class);
    }

}
