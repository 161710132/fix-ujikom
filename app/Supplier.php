<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang_masuk;

class Supplier extends Model
{

	protected $table = 'suppliers';
    public $timestamps = true;

    public function Barang_masuk()
	{
		return $this->hasMany('App\Barang_masuk','id_supplier');
	}
}
