<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'email',
        'email_verified_at',
        'password',
        'school',
        'phone',
        'country',
        'city',
        'country_geo_location',
        'linkedin',
        'experience',
        'created_at',
        'updated_at'
    ];
}
