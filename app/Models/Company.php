<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'email',
        'phone',
        'description',
        'logo_path',
        'banner_path',
        'address',
        'status',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function companyType()
    {
        return $this->belongsTo(CompanyType::class);
    }
}
