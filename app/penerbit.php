<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    protected $fillable = ['pbt_nama','pbt_alamat','pbt_tlp'];
    public $timestamp = true;
}
