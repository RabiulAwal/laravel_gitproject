<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudTable extends Model
{
    protected $fillable = [
        'pwd','email','remember',
    ];
}
