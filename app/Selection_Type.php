<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection_Type extends Model
{
    protected $fillable = ['kode_pemilihan', 'jenis_pemilihan'];
    protected $primaryKey = 'id_pemilihan';
    protected $table = "selection_types";

    public function session()
    {
        return $this->hasMany('App\Session');
    }
}
