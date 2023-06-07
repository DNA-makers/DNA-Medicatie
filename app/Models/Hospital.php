<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';

    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'website_link',
    ];
    use HasFactory;
}
