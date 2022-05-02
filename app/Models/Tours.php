<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel', 'transport', 'image', 'per_person_sharing', 'single_room', 'meals', 
    ];
}
