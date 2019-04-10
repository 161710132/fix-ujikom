@extends('layouts.admin3')
@section('content')
<div class="container-fluid">
	<hr>
	<div class="row-fluid">
        <div class="span8">    
			<div class="widget-box">
    			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Data Product</h5>
        </div>
        	<div class="widget-content nopadding">
				
				<form action="{{ route('barangmasuk.update',$barangmasuk->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

        			<div class="control-group {{ $errors->has('id_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Produk Masuk </label>
			  			<div class="controls">	
			  			<select name="id_barang" class="form-control">
			  				@foreach($barang as $data)
			  				<option value="{{ $data->id }}" {{ $selectedBarang == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_barang }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label class="control-label">Quantity </label>
			  			<div class="controls">	
			  			<input type="number" name="quantity" class="form-control" value="{{ $barangmasuk->quantity }}" required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Barang </label>
			  			<div class="controls">	
			  			<input type="number" value="{{ $barangmasuk->harga_barang }}" name="harga_barang" class="form-control"  required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('id_karyawan') ? ' has-error' : '' }}">
			  			<label class="control-label">Karyawan </label>
			  			<div class="controls">	
			  			<select name="id_karyawan" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_karyawan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_karyawan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('id_supplier') ? ' has-error' : '' }}">
			  			<label class="control-label">Supplier </label>
			  			<div class="controls">	
			  			<select name="id_supplier" class="form-control">
			  				@foreach($supplier as $data)
			  				<option value="{{ $data->id }}" {{ $selectedSupplier == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_supplier'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_supplier') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  	<div class="form-actions">
			  		<center><a class="btn btn-danger" href="{{ url()->previous() }}"><i class="icon-remove">&nbsp;Back</i></a>
              		<button type="submit" onclick="return confirm('Anda Yakin Akan Memperbaharui Data?')" class="btn btn-success"><i class="icon-ok">&nbsp;Update</i></button></center>
			  		
			  	</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>

			  		
            	
@endsection