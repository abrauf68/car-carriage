<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;

    public function companyServices()
    {
        return $this->hasMany(CompanyService::class)
                    ->where('is_active', 'active');
    }
}
