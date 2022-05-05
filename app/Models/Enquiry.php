<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model

{

    protected $table = 'enquiries';

    protected $fillable = [
        'full_name', 'email_address', 'phone_number', 'destinations', 'nationality', 'travel_date'
    ];
    use HasFactory;
}
