<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    protected $table = 'company_type';

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
