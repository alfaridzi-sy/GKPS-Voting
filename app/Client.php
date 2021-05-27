<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['gelar_depan', 'nama_lengkap', 'gelar_belakang', 'email_klien', 'foto', 'password', 'instansi', 'sektor', 'waktu_pendaftaran', 'wa', 'user_agent'];
    protected $primaryKey = 'id_klien';
    public function vote()
    {
        return $this->belongsToMany('App\Vote');
    }

    public function absent_detail()
    {
        return $this->belongsToMany('App\Absent_Detail');
    }
}
