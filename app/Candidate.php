<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_kandidat';
    protected $table = "candidates";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }
}
