<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote_Result extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_hasil_voting';
    protected $table = "vote_results";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Candidate', 'id_kandidat');
    }

    public function vote()
    {
        return $this->belongsTo('App\Vote', 'id_detail_voting');
    }
}
