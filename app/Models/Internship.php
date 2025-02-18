<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'dob',
        'gender',
        'email',
        'phone',
        'alt_phone',
        'current_address',
        'permanent_address',
        'college',
        'degree',
        'year',
        'graduation_year',
        'internship_type',
        'start_date',
        'experience',
        'payment_proof',
        'resume',
        'id_proof',
        'terms_agreement',
        'payment_confirmation',
    ];

    protected $casts = [
        'terms_agreement' => 'boolean',
        'payment_confirmation' => 'boolean',
    ];


    // Convert date format when retrieving
    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('dd/mm/yyyy'); // Display as DD/MM/YY
    }

    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('dd/mm/yyyy'); // Display as DD/MM/YY
    }
}
