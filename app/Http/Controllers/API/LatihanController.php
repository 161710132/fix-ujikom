<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang_keluar;
use App\Barang_master;
use App\Barang_masuk;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang_masuk::all();
        return response()->json($barang, 200);
    }

    //SearchBar

    public function getSearchResults(Request $request){
        $data = $request->get('data');
        $search_barang = Barang_master::where('nama_barang', 'like', "%{$data}%")
                         ->orWhere('jenis_barang', 'like', "%{$data}%")
                         ->orWhere('satuan', 'like', "%{$data}%")
                         ->orWhere('quantity', 'like', "%{$data}%")
                         ->orWhere('harga_barang', 'like', "%{$data}%")
                         ->orWhere('harga_jual', 'like', "%{$data}%")
                         ->get();
            return response()->json([ 'data' => $search_barang ]); 
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
        $barangkeluar = Barang_keluar::create($request->all());
        return response()->json($barang, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang_master::findOrFail($id);
        return response()->json($barang, 200);
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
