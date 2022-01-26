<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuckingUser extends Model
{
    use HasFactory;

    protected $table = 'fucking_users';

    protected $fillable = [
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
