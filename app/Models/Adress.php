<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = [
        'street',
        'city',
        'state',
        'postal_code',
        'country',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
