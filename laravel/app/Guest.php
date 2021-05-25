<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'date_of_birth',
        'document_type',
        'document_number',
        'phone_number',
        'address',
    ];
}
