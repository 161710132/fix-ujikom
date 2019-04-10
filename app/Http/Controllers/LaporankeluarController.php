<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_keluar;
use App\Barang_masuk;
use Excel;
use PDF;
use Carbon\Carbon;

class LaporankeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Keluar = Barang_masuk::whereDate('created_at', Carbon::today())->get();
        return view('Keluar.index', compact('Keluar'));
    }

    public function index2(Request $request)
    {
        $tglmasuk = $request->tglmasuk;
        $tglkeluar = $request->tglkeluar;
        $Keluar = Barang_masuk::whereBetween('created_at', [$tglmasuk, $tglkeluar])->get();
        return view('Keluar.index2', compact('Keluar', 'tglmasuk','tglkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

    //pdf

    public function report(Request $request)
    {
         $Laporan = Barang_masuk::all();
         
        if($request->view_type === 'download') {
            $pdf = PDF::loadView('keluar.report', ['Laporan' => $Laporan]);
            return $pdf->download('Laporan.pdf');
        } else {
            $view = View('Keluar.report', ['Keluar' => $Keluar]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }

    //excel

    public function exportPost()
    {
        $Keluar = Barang_masuk::all();
        return Excel::create('Laporan Pengeluran', function($excel) use ($Keluar){
            $excel->setTitle('List')
            ->setCreator('Admin');
            $excel->sheet('Laporan Pengeluran', function($sheet) use ($Keluar){
                $row = 1;
                $sheet->row($row, [
                    'Nama Produk',
                    'Jenis Produk',
                    'Quantity',
                    'Harga Produk',
                    'Nama Karyawan',
                    'Supplier',
                    'Tanggal Keluar'
            ]);



            foreach ($Keluar as $barangs) {
                $sheet->row(++$row, [
                    $barangs->Barang_master->nama_barang,
                    $barangs->Barang_master->jenis_barang,
                    $barangs->quantity,
                    $barangs->harga_barang,
                    $barangs->User->name,
                    $barangs->Supplier->nama, 
                    $barangs->created_at
                    
                ]);
            }
            });
        })->export('xls');
    }

    public function pdf22(request $request){
         $tglmasuk = $request->tglmasuk;
         $tglkeluar = $request->tglkeluar;
         $Laporankeluar = Barang_masuk::whereBetween('created_at',[$tglmasuk,$tglkeluar])->get();
         $pdf = PDF::loadView('keluar.report', ['Laporankeluar' => $Laporankeluar]);
            return $pdf->download('Laporan.pdf');
    }

    public function Pengeluran(Request $request){

        $barang = Barang_master::findOrFail($request->id_barang[$id]);
        $barang = $barangmaster->harga_jual = $request->harga_jual[$id];
        $barang = $barangmaster->harga_barang = $request->harga_barang[$id];

        $barangmasuk = Barang_masuk::findOrFail($request->id_barang[$id]);
        
        
    }
}
