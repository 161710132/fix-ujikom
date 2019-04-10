<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Supplier;
use App\Barang_master;
use App\User;

class Barang_masuk extends Model
{
    protected $table = 'barang_masuks';
    public $timestamps = true;

    public function Supplier()
    {
    	return $this->belongsTo('App\Supplier','id_supplier');
    }

    public function Barang_master()
    {
    	return $this->belongsTo('App\Barang_master','id_barang');
    }

    public function User()
    {
    	return $this->belongsTo('App\User','id_karyawan');
    }

}
