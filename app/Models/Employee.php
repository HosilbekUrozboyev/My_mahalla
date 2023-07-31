<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'position',
        'telegram_link',
        'facebook_link',
        'instagram_link',
        'telephoneNumber',
        'photo',
    ];
}
