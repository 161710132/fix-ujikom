@extends('layouts.admin3')
@section('content')
<div class="card">
    <div class="card">
        <h5 class="card-title"></h5>
            <div class="panel-title left">
                <a class="btn btn-primary " href="{{route('supplier.create') }}"><i class="icon-plus">&nbsp;Tambah Supplier</i></a>
            </div>
        </div>
    </div>
        <div class="card">
                            
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                 <h5>Data table</h5>
            </div>
            	<div class="widget-content nopadding">
                    <table class="table table-bordered data-table"> 
                        <thead>
                            <tr>
                                <th>No</th>
								  <th>Nama Supplier</th>
								  <th>Alamat</th>
								  <th>No Telphone</th>
								  <th></th>
								  <th></th>
					  			</tr>
				  			</thead>
				  		<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($supplier as $data)
				  	  	<tr>
				    		<td>{{ $no++ }}</td>
				    		<td>{{ $data->nama }}</td>
				    		<td><p>{{ $data->alamat }}</p></td>
				    		<td><p>{{ $data->no_telepon}}</p></td>
							<td>
								<center><a class="btn btn-warning " href="{{ route('supplier.edit',$data->id) }}"><i class="icon-pencil"></i></a></center>
							</td>
							<td>
								<form method="post" action="{{ route('supplier.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<center><button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger "><i class="icon-trash"></i></button></center></form>
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