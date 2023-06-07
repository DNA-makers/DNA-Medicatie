<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gen extends Model
{
    protected $table = 'gen';

    protected $fillable = [
        'user_id',
        'gen_code',
        'diplotype',
        'phenotype',
        'divergent'
    ];

    public function variants()
    {
        return $this->hasMany(Variant::class, 'gen_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
