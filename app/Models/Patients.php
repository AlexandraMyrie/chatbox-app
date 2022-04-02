<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'email',
        'emergency_contact_name',
        'emergency_contact_number',
        'gender',
        'street',
        'city',
        'parish',
        'home_phone',
        'middle_initial',
        'cell_phone',
        'marital_title',
        'occupation',
        'work_phone',

    ];
}
