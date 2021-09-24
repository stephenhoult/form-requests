<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'instagram_username',
        'where_did_you_hear_about_us',
        'discount_code',
    ];
}
