<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['nama','alamat'];
    protected $dates = ['created_at','updated_at'];
}

