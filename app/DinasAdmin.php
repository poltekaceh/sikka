<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DinasAdmin extends Authenticatable
{
    protected $table = 'admin';

    protected $fillable = [
    			'username', 'password', 'salt',
		];
}
