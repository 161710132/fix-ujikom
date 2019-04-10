<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_masuk;
use App\Barang_master;
use App\User;
use App\Supplier;
use Session;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangmasuk = Barang_masuk::with('Barang_master')->get();
        return view('barangmasuk.index',compact('barangmasuk'));
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
        $karyawan = User::all();
        $supplier = Supplier::all();
        return view('barangmasuk.create',compact('barang','karyawan','supplier'));
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
        $barangmasuk = new Barang_masuk;
        $barangmasuk->id_barang = $request->id_barang[$id];
        $barangmasuk->quantity = $request->quantity[$id];
        $barangmasuk->harga_barang = $request->harga_barang[$id];
        $barangmasuk->total = $request->quantity[$id] * $request->harga_barang[$id];
        $barangmasuk->id_karyawan = $request->id_karyawan;
        $barangmasuk->id_supplier = $request->id_supplier;

        $barang = Barang_master::findOrFail($request->id_barang[$id]);
        $barang->quantity = $barang->quantity + $request->quantity[$id];
        $barang->harga_barang = $barang->harga_barang + $request->harga_barang[$id];
        $barang->total = $barang->quantity * $request->harga_barang[$id];

        
        $barang->save();    
        $barangmasuk->save();
        
        }
       
       
        return redirect()->route('barangmasuk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangmasuk = Barang_masuk::findOrFail($id);
        return view('barangmasuk.show',compact('barangmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangmasuk = Barang_masuk::findOrFail($id);
        $barang = Barang_master::all();
        $karyawan = User::all();
        $supplier = Supplier::all();
        $selectedBarang = Barang_masuk::findOrFail($barangmasuk->id)->id_barang;
        $selectedKaryawan = Barang_masuk::findOrFail($id)->id_karyawan;
        $selectedSupplier = Barang_masuk::findOrFail($id)->id_supplier;
        // dd($selected);
        return view('barangmasuk.edit',compact('barangmasuk','barang','karyawan','supplier','selectedBarang','selectedKaryawan','selectedSupplier'));
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
        
        $barangmasuk = Barang_masuk::findOrFail($id);
        $barangmasuk->id_barang = $request->id_barang;
        $barangmasuk->quantity = $request->quantity;
        $barangmasuk->harga_barang = $request->harga_barang;
        $barangmasuk->total = $request->quantity * $request->harga_barang;
        $barangmasuk->id_karyawan = $request->id_karyawan;
        $barangmasuk->id_supplier = $request->id_supplier;

        $barang = Barang_master::findOrFail($request->id_barang);
        $barang->quantity = $barang->quantity + $request->quantity;
        $barang->harga_barang = $barang->harga_barang + $request->harga_barang;
        $barang->total = $barang->quantity * $request->harga_barang;

        
        $barang->save();  

        $barangmasuk->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$barangmasuk->id_barang</b>"
        ]);
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang_masuk::findOrFail($id);
        $barang->delete();
        
        return redirect()->route('barangmasuk.index');
    }

      public function getDetailSupplier(Request $request){
        $supplier = Supplier::find($request->id);
        $id_supplier = $supplier->id;
        $nama = $supplier->nama;
        $alamat = $supplier->alamat;
        $no_telepon = $supplier->no_telepon;
        

          return json_encode([
            "id_supplier" => $id_supplier,
            "nama" => $nama,
            "alamat" => $alamat,
            "no_telepon" => $no_telepon,


          ]);
    }
}
