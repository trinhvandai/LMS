<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecializesUser extends Model
{
    protected $table = 'specializes_users';

    protected $fillable = [
        'specialize_id',
        'user_id',
    ];
}
