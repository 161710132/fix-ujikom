<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_keluar;
use Excel;
use PDF;
use Carbon\Carbon;
use App\Customer;
use App\Barang_master;

class KeuntunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $untung = Barang_keluar::whereDate('created_at', Carbon::today())->get();
        $customer = Customer::with('Barang_keluar')->get();
        $barang = Barang_keluar::with('Barang_master')->get();
        return view('keuntungan.index', compact('untung','customer','barang'));
    }

    public function index2(Request $request)
    {
        $tglmasuk = $request->tglmasuk;
        $tglkeluar = $request->tglkeluar;
        $untung = Barang_keluar::whereBetween('created_at', [$tglmasuk, $tglkeluar])->get();
        return view('keuntungan.index2', compact('untung', 'tglmasuk','tglkeluar'));
    }

     public function getDetailCustomer(Request $request){
        $customer = Customer::find($request->id);
        $id_customer = $customer->nama_customer;
        $nama_produk = $customer->nama_produk;

          return json_encode([
        
            "id_customer" => $id_customer,
            "nama_produk"=> $nama_produk,
            

          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
