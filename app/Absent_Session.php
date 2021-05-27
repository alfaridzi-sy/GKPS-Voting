<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent_Session extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_sesi_absen';
    protected $table = "absent_sessions";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }
}
