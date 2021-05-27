<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteSession extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_sesi_vote';
    protected $table = "vote_sessions";

    public function session()
    {
        return $this->belongsTo('App\Session', 'id_sesi');
    }
}
