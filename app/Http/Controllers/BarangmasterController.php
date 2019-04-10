<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang_master;
use Session;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;
use Excel;
use PDF;
use Alert;

class BarangmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang_master::all();
        return view('barangmaster.index',compact('barang'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangmaster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nama_barang' => 'required|',
            'jenis_barang' => 'required|',
            'satuan' => 'required|',
            'quantity' => 'required|',
            'harga_barang' => 'required|min:3',
            'harga_jual'=> 'required|min:3'
            
            
        ]);
        $barangmaster = new Barang_master;
        $barangmaster->nama_barang = $request->nama_barang;
        $barangmaster->jenis_barang = $request->jenis_barang;
        $barangmaster->satuan = $request->satuan;
        $barangmaster->quantity = $request->quantity;
        $barangmaster->harga_barang = $request->harga_barang;
        $barangmaster->total = $request->quantity * $request->harga_barang;
        $barangmaster->harga_jual = $request->harga_jual;
        $barangmaster->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$barangmaster->nama_barang</b>"
        ]);
        return redirect()->route('barangmaster.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangmaster = Barang_master::findOrFail($id);
        return view('barangmaster.show',compact('barangmaster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangmaster = Barang_master::findOrFail($id);
        return view('barangmaster.edit',compact('barangmaster'));
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
        Alert::info('Berhasil di Perbaharui', 'Optional Title')->autoclose(4000);
        $this->validate($request,[
            'nama_barang' => 'required|',
            'jenis_barang' => 'required|',
            'satuan' => 'required|',
            'quantity' => 'required|',
            'harga_barang' => 'required|min:3',
            'harga_jual'=> 'required|min:3'
        ]);
        $barangmaster = Barang_master::findOrFail($id);
        $barangmaster->nama_barang = $request->nama_barang;
        $barangmaster->jenis_barang = $request->jenis_barang;
        $barangmaster->satuan = $request->satuan;
        $barangmaster->quantity = $request->quantity;
        $barangmaster->harga_barang = $request->harga_barang;
        $barangmaster->total = $request->quantity * $request->harga_barang;
        $barangmaster->harga_jual = $request->harga_jual;
        $barangmaster->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$barangmaster->nama_barang</b>"
        ]);
        return redirect()->route('barangmaster.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangmaster = Barang_master::findOrFail($id);
        $barangmaster->delete();
        return redirect()->route('barangmaster.index')->with('message','Delete Success');
    }

    // excel 


    public function exportPost()
    {
        $barangmaster = Barang_master::all();
        return Excel::create('Data Produk', function($excel) use ($barangmaster){
            $excel->setTitle('List')
            ->setCreator('Admin');
            $excel->sheet('Data kategori', function($sheet) use ($barangmaster){
                $row = 1;
                $sheet->row($row, [
                    'nama_barang',
                    'jenis_barang',
                    'satuan',
                    'quantity',
                    'harga_barang',
                    'harga_jual'
            ]);
            foreach ($barangmaster as $barangs) {
                $sheet->row(++$row, [
                    $barangs->nama_barang,
                    $barangs->jenis_barang,
                    $barangs->satuan,
                    $barangs->quantity,
                    $barangs->harga_barang,
                    $barangs->harga_jual,
                ]);
            }
            });
        })->export('xls');
    }

    //PDF

    public function report(Request $request)
    {
        
         $barangmaster = Barang_master::all();
         
        if($request->view_type === 'download') {
            $pdf = PDF::loadView('barangmaster.report', ['barangmaster' => $barangmaster]);
            return $pdf->download('barangmaster.pdf');
        } else {
            $view = View('barangmaster.report', ['barangmaster' => $barangmaster]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }


    

}