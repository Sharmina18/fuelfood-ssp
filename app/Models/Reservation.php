<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'table_number',
        'reservation_date',
        'number_of_people',
        'slug',
        'status',
    ];
}
