<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
    protected $table = 'advise';

    public function gen()
    {
        return $this->belongsTo(Gen::class);
    }

    use HasFactory;
}
