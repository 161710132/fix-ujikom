@extends('layouts.admin2')
@section('content')
            <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            
          </div>
              <form action="{{url('/reportkeluar')}}" method="post">
                  {{csrf_field()}}

                <div class='col-sm-4'>
                   Dari Tanggal :
                    <div class="form-group">
                        <div class='input-group date'>
                            <input type='date' name="tglmasuk" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class='col-sm-4'>
                    Sampai Tanggal :
                    <div class="form-group">
                        <div class='input-group date' >
                            <input type='date' name="tglkeluar" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
              </br>
                                <button type="submit" name="submit" value="submit" class="btn btn-default">Filter</button> 



                

  
           </form>
       </div>

   </div>

</div>
<div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jenis Produk</th>
                                <th>Quantity</th>
                                <th>Harga</th>
                                <th>Nama Karyawan</th>
                                <th>Supplier</th>
                                <th>Tanggal Keluar</th>
                              </tr>
                            </thead>
          <?php
          $no = 1;
          ?>
            @foreach($Keluar as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->Barang_master->nama_barang }}</td>
              <td>{{ $data->Barang_master->jenis_barang }}</td>
              <td><p>{{ $data->quantity }}</p></td>
              <td><p>{{ $data->harga_barang }}</p></td>
              <td><p>{{ $data->User->name }}</p></td>
              <td><p>{{ $data->Supplier->nama}}</p></td>
              <td><p>{{ $data->created_at }}</p></td>
              

                              </tr>
@endforeach
                            </table>
                        </div>
</div>



                                  <!-- Table row -->
      

       


                         

        @endsection
