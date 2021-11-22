<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repair;

class Repairer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'siret',
        'address',
        'city',
        'postal_code',
        'country',
        'is_internal'
    ];

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}
