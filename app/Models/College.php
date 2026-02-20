<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'col_name',
        'dean_name',
        'no_students',
    ];
}
