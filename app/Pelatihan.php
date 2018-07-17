<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pelatihan extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ["id_pelatihan"];
    protected $table = "tb_pelatihan";
    protected $primaryKey = 'id_pelatihan';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function daftarPelatihan()
    {
        return $this->belongsTo(App\Pelatihan::class);
    }
}
