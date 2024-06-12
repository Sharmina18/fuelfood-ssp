<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'start_date',
        'end_date',
        'meal_preference',
        'slug',
        'status',
    ];
}
