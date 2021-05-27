<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_sesi';
    protected $table = "sessions";

    public function selection_type()
    {
        return $this->belongsTo('App\Selection_Type', 'id_pemilihan');
    }

    public function candidate()
    {
        return $this->hasMany('App\Candidate', 'id_sesi');
    }

    public function absent_session()
    {
        return $this->hasMany('App\Absent_Session', 'id_sesi');
    }
}
