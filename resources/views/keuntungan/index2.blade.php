@extends('layouts.admin2')
@section('content')
<div class="widget-box">
 	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Laporan Pemasukan</h4>

                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        <div class="card">

            <div class="card-body">
            	<a class="btn btn-primary" href="{{ url('/laporanmasuk/reportmasuk/download') }}">Export PDF</a>
            	<a class="btn btn-outline-primary" href="{{ url('export/laporanmasuk') }}">Export Excel</a>
                <h5 class="card-title"></h5>
                    
    
                         <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jenis</th>
                                <th>Quantity</th>
                                <th>Harga</th>
                                <th>Customer</th>
                                <th>Nama Karyawan</th>
                                <th>Tanggal Masuk</th> 
                              </tr>
                            </thead>
          <?php
          $no = 1;
          ?>
            @foreach($untung as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->Barang_master->nama_barang }}</td>
              <td><p>{{ $data->Barang_master->jenis_barang }}</p></td>
              <td><p>{{ $data->quantity }}</p></td>
              <td><p>{{ $data->harga_barang }}</p></td>
              <td><p>{{ $data->Customer->nama_customer }}</p></td>
              <td><p>{{ $data->User->name }}</p></td>
              <td><p>{{ $data->created_at }}</p></td>
              

                              </tr>
@endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection

