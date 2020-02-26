<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['jdl_buku','sinopsis','jdl_foto','file'];
    public $timestamp = true;
}
