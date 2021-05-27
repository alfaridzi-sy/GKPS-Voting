<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent_Detail extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_detail_absensi';
    protected $table = "absent__details";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'id_klien');
    }
}
