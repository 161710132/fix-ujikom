<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang_master;
use App\User;
use App\Customer;

class Barang_keluar extends Model
{
    protected $table = 'barang_keluars';
    public $timestamps = true;

    public function Barang_master()
    {
    	return $this->belongsTo('App\Barang_master','id_barang');
    }

    public function User()
    {
    	return $this->belongsTo('App\User','id_karyawan');
    }

    public function Customer()
    {
    	return $this->belongsTo('App\Customer','id_customer');
    }


}
