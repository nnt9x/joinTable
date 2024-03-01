<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'full_name',
        'phone',
        'address',
        'created_at',
        'updated_at'
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
