<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resetsPasswords extends Model
{
    protected $table = 'password_resets';
    protected $guarded = [];
}
