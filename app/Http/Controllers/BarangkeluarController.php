<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_keluar;
use App\Barang_master;
use App\Barang_masuk;
use App\Customer;
use App\User;
use Session;

class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluar = Barang_keluar::with('Barang_master')->get();
        return view('barangkeluar.index',compact('barangkeluar'));
    }

    public function jsonkmbl()
    {
        $keluar = Barang_keluar::all();
        return Datatables::of($keluar);
    }

    public function getDetailCustomer(Request $request){
        $customer = Customer::find($request->id);
        $id = $customer->id;
        $id_customer = $customer->nama_customer;
        $alamat = $customer->alamat;
        $no_telpon = $customer->no_telpon;
        $tgl_mulai = $customer->tgl_mulai;
        $tgl_akhir = $customer->tgl_akhir;

          return json_encode([
            'id' => $id,
            "id_customer" => $id_customer,
            "alamat" => $alamat,
            "no_telpon" => $no_telpon,
            "tgl_mulai" => $tgl_mulai,
            "tgl_akhir" => $tgl_akhir,

          ]);
    }

    public function getDetailBarang(Request $request){
        $data = Barang_master::select('harga_barang','quantity')->where('id',$request->id)->first();
        return response()->json($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang_master::all();
        $customer = Customer::all();
        $karyawan = User::all();
        
        return view('barangkeluar.create',compact('barang','customer','karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        for($id = 0; $id < count($request->id_barang); $id++){
        $barangkeluar = new Barang_keluar;
        $barangkeluar->id_barang = $request->id_barang[$id];
        $barangkeluar->quantity = $request->quantity[$id];
        $barangkeluar->harga_barang = $request->harga_barang[$id];
        $barangkeluar->total = $request->quantity[$id] * $request->harga_barang[$id];
        $barangkeluar->id_customer = $request->id_customer;
        $barangkeluar->id_karyawan = $request->id_karyawan;

        $barang = Barang_master::findOrFail($request->id_barang[$id]);
        $jumlah =  $barang->quantity;
        $barang->quantity = $barang->quantity - $request->quantity[$id];
        $barang->total = $barang->total - $request->harga_barang[$id];
         if ($request->quantity[$id] > $barang->quantity) {
            Session::flash("flash_notification", [
            "level"=>"primary",
            "message"=>"Stock yang tersedia hanya" . $jumlah
            ]);
            return redirect()->route('barangkeluar.create');
        }
           
        $barang->save();    
        $barangkeluar->save();
        
        }
       
        return redirect()->route('barangkeluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangkeluar = Barang_keluar::findOrFail($id);
        return view('barangkeluar.show',compact('barangkeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangkeluar = Barang_keluar::findOrFail($id);
        $barang = Barang_master::all();
        $customer = Customer::all();
        $karyawan = User::all();
        $selectedBarang = Barang_keluar::findOrFail($id)->id_barang;
        $selectedCustomer = Barang_keluar::findOrFail($id)->id_customer;
        $selectedKaryawan = Barang_keluar::findOrFail($id)->id_karyawan;
        
        // dd($selected);
        return view('barangkeluar.edit',compact('barangkeluar','barang','customer','karyawan','selectedBarang','selectedCustomer','selectedKaryawan'));
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
        
        $barangkeluar = Barang_keluar::findOrFail($id);
        $barangkeluar->id_barang = $request->id_barang;
        $barangkeluar->quantity = $request->quantity;
        $barangkeluar->harga_barang = $request->harga_barang;
        $barangkeluar->total = $request->quantity * $request->harga_barang;
        $barangkeluar->id_customer = $request->id_customer;
        $barangkeluar->id_karyawan = $request->id_karyawan;
        $barangkeluar->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$barangkeluar->id_barang</b>"
        ]);
        return redirect()->route('barangkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang_keluar::findOrFail($id);
        $barang->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('barangkeluar.index');
    }
}
