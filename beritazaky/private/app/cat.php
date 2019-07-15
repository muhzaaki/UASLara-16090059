<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    protected $table = 'categories';
    protected $guarded = [];
    protected $PrimaryKey ='id';
}
