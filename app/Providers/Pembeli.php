<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table='pembeli';
    protected $primaryKey='kode_pembeli';
    protected $fillable=['pembeli','id_pembeli','nama','alamat','no_hp'];
}
