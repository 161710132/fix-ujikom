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
        	<form action="{{ route('barangmaster.update',$barangmaster->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

          		<div class="form-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
			  			<label class="control-label" >Product Name</label>
			  			<div class="controls">	
			  			<input type="text" name="nama_barang" class="form-control" value="{{ $barangmaster->nama_barang }}"  required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group {{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Barang </label>	
			  			<div class="controls">
			  			<select class=" form-control" name="jenis_barang"  required>
			  				<option value="0"> {{ $barangmaster->jenis_barang == "Sayuran" ? "--selected--": "" }}</option>
			  				<option value="1"> {{ $barangmaster->jenis_barang == "Sayuran" ? "": "" }}Sayuran</option>
			  				<option value="2"> {{ $barangmaster->jenis_barang == "Buah-Buahan" ? "selected": "" }}Buah-Buahan</option>
                    	</select>

			  			@if ($errors->has('jenis_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  	

			  		<div class="form-group {{ $errors->has('satuan') ? ' has-error' : '' }}">
			  			<label class="control-label">Satuan </label>	
			  			<div class="controls">
			  			<select class=" form-control" name="satuan"  required>
			  				<option value="0"> {{ $barangmaster->satuan == "Kilogram" ? "--selected--": "" }}</option>
			  				<option value="Kilogram"> {{ $barangmaster->satuan == "Kilogram" ? "": "" }}Kilogram</option>
			  				<option value="Ikat"> {{ $barangmaster->satuan == "Ikat" ? "selected": "" }}Ikat</option>
                    	</select>

			  			@if ($errors->has('satuan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('satuan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label class="control-label">Quantity : </label>
			  			<div class="controls">	
			  			<input type="number" name="quantity" class="form-control" value="{{ $barangmaster->quantity }}"  required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Barang : </label>
			  			<div class="controls">	
			  			<input type="number" name="harga_barang" class="form-control" value="{{ $barangmaster->harga_barang }}"  required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Jual : </label>	
			  			<div class="controls">
			  			<input type="number" name="harga_jual" class="form-control" value="{{ $barangmaster->harga_jual }}"  required>
			  			@if ($errors->has('harga_jual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_jual') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  	<div class="form-actions">
			  		<a class="btn btn-danger" href="{{ url()->previous() }}"><i class="icon-remove">&nbsp;Kembali</i></a>
              		<button type="submit" onclick="return confirm('Anda Yakin ingin Memperbaharui Data?')" class="btn btn-success"><i class="icon-ok">Perbaharui</i></button>
			  	</div>

			  		
			  		
            </form>
        </div>
    </div>
</div>
</div>


@endsection

