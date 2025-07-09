<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UHispatient extends Model
{
    use HasFactory;

    protected $table = 'u_hispatients';

    protected $fillable = [
        'CODE',
        'U_LASTNAME',
        'U_FIRSTNAME',
        'U_MIDDLENAME',
        'U_BIRTHDATE',
        'U_GENDER',
        'U_EXTNAME',
        'U_VISITCOUNT',
    ];
}
