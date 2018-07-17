<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = []; //so all the field can be mass assignable
    protected $table = "tb_register";
    protected $primaryKey = 'username';

    public $incrementing = false;
    public $keyType = 'string';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dukcapil()
    {
        return $this->belongsTo(App\Dukcapil::class, 'nik', 'nik');
    }

    public function pendidikan()
    {
        return $this->hasOne(App\Pendidikan::class, "username", "username");
    }
}
