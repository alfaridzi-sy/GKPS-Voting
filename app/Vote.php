<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_detail_voting';
    protected $table = "votes";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'id_klien');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Candidate', 'id_kandidat');
    }
}
