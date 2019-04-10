@extends('layouts.admin3')
@section('content')
<div class="card">
	<div class="card">
		<h5 class="card-title"></h5>
		<div class="panel-title left">
			<a class="btn btn-primary " href="{{route('barangmasuk.create') }}"><i class="icon-plus">&nbsp;Tambah Produk</i></a>
        </div>
    </div>
</div>

	<div class="widget-box">
		<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
        </div>
        	<div class="widget-content nopadding">
        		<table class="table table-bordered data-table">
        			<thead>
                        <tr>
                            <th>No</th>
							<th>Nama Produk</th>
							<th>Quantity</th>
							<th>Harga Barang</th>
							<th>Total</th>
							<th>Karyawan</th>
							<th>Supplier</th>
							<th>Tanggal Barang Masuk</th>
							<th></th>
							<th></th>
					 	</tr>
				  	</thead>
						<tbody>
				  			<?php $nomor = 1; ?>
				  			@php $no = 1; @endphp
				  			@foreach($barangmasuk as $data)
				  	  	<tr>
				    		<td>{{ $no++ }}</td>
				    		<td>{{ $data->Barang_master->nama_barang }}</td>
				    		<td><p>{{ $data->quantity }}</p></td>
							<td><p><?php echo 'Rp.' . number_format( $data->harga_barang, '2',',','.')?></p></td>
							<td><p><?php echo 'Rp.' . number_format( $data->total, '2',',','.')?></p></td>
				    		<td><p>{{ $data->User->name}}</p></td>
				    		<td><p>{{ $data->Supplier->nama}}</p></td>
				    		<td><p>{{ $data->created_at}}</p></td>
							<td>
								<a class="btn btn-warning " href="{{ route('barangmasuk.edit',$data->id) }}"><i class="icon-edit"></i></a>
							</td>
							<td>
								<form method="post" action="{{ route('barangmasuk.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" onclick="return confirm('Anda Yakin ingin Menghapus Data?')" class="btn btn-danger "><i class=" icon-trash"></i></button>
							</form>
						</td>
				     </tr>
@endforeach	
				  	</tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
@endsection