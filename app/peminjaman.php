<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $fillable = ['petugas_id','peminjams_id','ptg_nama','pjm_nama','pjm_tgl','pjm_tglkembali'];
    public $timestamp = true;

    public function petugas()
    {
        return $this->belongsTo('App\petugas','petugas_id');
    }

    public function peminjams()
    {
        return $this->belongsTo('App\peminjam','peminjams_id');
    }
}
