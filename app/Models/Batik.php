<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batik extends Model
{
    protected $table = 'batiks';
    protected $fillable = [
        'business_name',
        'address',
        'description',
        'phone_number',
        'instagram',
        'facebook',
        'twitter',
        'image'
    ];

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
