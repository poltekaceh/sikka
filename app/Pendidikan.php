<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ["id_pendidikan"];
    protected $table = "tb_pendidikan";
    protected $primaryKey = 'id_pendidikan';

    public function daftarPelatihan()
    {
        return $this->hasOne(App\DaftarPelatihan::class, 'id_pendidikan', 'id_pendidikan');
    }

    public function register()
    {
        return $this->belongsTo(App\Register::class, "username", "username");
    }
}
