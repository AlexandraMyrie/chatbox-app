<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'purpose_of_visit',
        'diagnosis',
        'treatment',
        'doctor_id',
        'patient_id',
        'ticket_id',

    ];
}
