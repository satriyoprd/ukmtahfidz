<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SantriVerifiedUjian extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'is_verified',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
