<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang_masuk;
use App\Barang_keluar;

class Barang_master extends Model
{
    protected $table = 'barang_masters';
    public $timestamps = true;

    public function Barang_masuk()
	{
		return $this->hasMany('App\Barang_masuk','id_barang');
	}

	public function Barang_keluar()
	{
		return $this->hasMany('App\Barang_masuk','id_barang');
	}
}
