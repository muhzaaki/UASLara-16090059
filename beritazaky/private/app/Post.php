<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'articles';
    protected $guarded = [];
    protected $PrimaryKey ='id';
}
