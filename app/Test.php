<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Test extends Model
{
	use Notifiable;
    protected $fillable = [
        'pwd','email','image',
    ];
}
