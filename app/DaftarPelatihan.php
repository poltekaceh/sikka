<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DaftarPelatihan extends Model
{
    use Notifiable;
    
    protected $guarded = ["id_daftarPelatihan"];
    protected $table = "tb_daftarPelatihan";
    protected $primaryKey = "id_daftarPelatihan";

    public function pendidikan()
    {
        return $this->belongsTo(App\Pendidikan::class, "id_pendidikan", "id_pendidikan");
    }

    public function pelatihan()
    {
        return $this->hasMany(App\Pelatihan::class);
    }

    public function register()
    {
        return $this->belongsTo(App\Register::class, "username", "username");
    }
}
