<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_keluar;
use App\Barang_masuk;
use App\Barang_master;
use App\Supplier;
use App\Customer;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::count();
        $barangmasuk = Barang_masuk::count();
        $barangkeluar = Barang_keluar::count();
        $supplier = Supplier::count();
        $barangmaster = Barang_master::count();
        $Keluar = Barang_masuk::whereDate('created_at', Carbon::today())->get();
        $masuk = Barang_keluar::whereDate('created_at', Carbon::today())->get();
        return view('home', compact('customer','barangmasuk','barangkeluar','supplier','barangmaster','Keluar','masuk'));
        // if (Laratrust::hasRole('Super Admin')) return $this->adminDasboard();
        // if (Laratrust::hasRole('Admin')) return $this->memberdasboard();
        
    }

    protected function adminDashboard(){
        $masuk = [];
        $keluar = [];
        foreach (Barang_master::all() as $masuk){
            array_push($masuk, $masuk->nama_barang);
            array_push($keluar, $keluar->id_barang->count());
        }

        return view('home', compact('masuk', 'keluar'));
    }

    
}
