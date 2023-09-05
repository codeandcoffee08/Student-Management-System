<?php

namespace App\Domains\ContactNumbers\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactNumber extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'smart',
        'globe',
        'others'
    ];
}
