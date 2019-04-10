<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang_keluar;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = true;

    public function Barang_keluar()
    {
    	return $this->hasMany('App\Barang_keluar','id_customer');
    }
}
