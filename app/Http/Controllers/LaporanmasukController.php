<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_keluar;
use Excel;
use PDF;
use Carbon\Carbon;

class LaporanmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuk = Barang_keluar::whereDate('created_at', Carbon::today())->get();
        return view('masuk.index', compact('masuk'));
    }

    public function index2(Request $request)
    {
        $tglmasuk = $request->tglmasuk;
        $tglkeluar = $request->tglkeluar;
        $masuk = Barang_keluar::whereBetween('created_at', [$tglmasuk, $tglkeluar])->get();
        return view('masuk.index2', compact('masuk', 'tglmasuk','tglkeluar'));
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

    //pdf

    public function report(Request $request)
    {
         $Laporanmasuk = Barang_keluar::all();
         
        if($request->view_type === 'download') {
            $pdf = PDF::loadView('masuk.report', ['Laporanmasuk' => $Laporanmasuk]);
            return $pdf->download('Laporan.pdf');
        } else {
            $view = View('masuk.report', ['masuk' => $masuk]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }

    public function exportPost()
    {
        $masuk = Barang_keluar::all();
        return Excel::create('Laporan Pemasukan', function($excel) use ($masuk){
            $excel->setTitle('List')
            ->setCreator('Admin');
            $excel->sheet('Laporan Pemasukan', function($sheet) use ($masuk){
                $row = 1;
                $sheet->row($row, [
                    'Nama Produk',
                    'Jenis Produk',
                    'Quantity',
                    'Harga Produk',
                    'Customer',
                    'Nama Karyawan',
                    'Tanggal Masuk'
            ]);



            foreach ($masuk as $barangs) {
                $sheet->row(++$row, [
                    $barangs->Barang_master->nama_barang,
                    $barangs->Barang_master->jenis_barang,
                    $barangs->quantity,
                    $barangs->harga_barang,
                    $barangs->Customer->nama_customer,
                    $barangs->User->name,
                    $barangs->created_at
                    
                ]);
            }
            });
        })->export('xls');
    }

    public function pdf2(request $request){
         $tglmasuk = $request->tglmasuk;
         $tglkeluar = $request->tglkeluar;
         $Laporanmasuk = Barang_keluar::whereBetween('created_at',[$tglmasuk,$tglkeluar])->get();
         $pdf = PDF::loadView('masuk.report', ['Laporanmasuk' => $Laporanmasuk]);
            return $pdf->download('Laporan.pdf');
    }

   
}
