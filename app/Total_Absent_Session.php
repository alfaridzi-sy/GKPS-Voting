<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total_Absent_Session extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_jumlah_sesi_absen';
    protected $table = "total_absent_sessions";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }
}
