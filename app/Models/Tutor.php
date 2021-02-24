<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'nameBuisness',
        'typeDocument',
        'documentNumber',
        'name',
        'secondName',
        'lastName',
        'country',
        'province',
        'municipy',
        'status',
        'email',
        'number',
    ];
}
