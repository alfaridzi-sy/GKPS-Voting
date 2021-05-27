<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengaturanSesi extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_sesi';
    protected $table = "sessions";

    public function selection_type()
    {
        return $this->belongsTo('App\Selection_Type', 'id_pemilihan');
    }
}
