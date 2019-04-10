@extends('layouts.admin3')
@section('content')

<div class="container-fluid">
	<hr>
	<div class="row-fluid">
		<div class="span8">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah Data</h5>
        </div>
        <div class="widget-content nopadding">
			<form action="{{ route('barangmaster.store') }}" id="form-wizard" class="form-horizontal" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}

			  	<div class="control-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
			  		<label class="control-label">Product Name :</label>
			  		<div class="controls">
			  			<input type="text" name="nama_barang" id="produk" class="form-control" placeholder="Nama Produk" id="fname" required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
                    </div>
            	</div>

            	<div class="control-group {{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
            		<label class="control-label">Jenis Product </label>
            		<div class="controls">
            			<select name="jenis_barang" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                            <option selected="disable">Jenis Barang</option>
			  			 	<option value="Sayuran">Sayuran</option>
			  			 	<option value="Buah-Buahan">Buah-Buahan</option>
                        </select>
                    </div>
                </div>

                <div class="control-group {{ $errors->has('satuan') ? ' has-error' : '' }}">
                	<label class="control-label">Satuan</label>
                	<div class="controls">
                		<select class="select2 form-control custom-select" name="satuan" style="width: 100%; height: 36px;	">
			  			 	<option>Satuan</option>
			  			 	<option value="Kilogram">Kilogram</option>
			  			 	<option value="Ikat">Ikat</option>
			  			</select>
			  		</div>
			  	</div>

			  	<div class="control-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  		<label class="control-label">Quantity</label>
			  		<div class="controls">
			  			<input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="control-group {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
                	<label class="control-label">Harga Product</label>
                	<div class="controls">
                		<input type="number" name="harga_barang" class="form-control" id="fname" placeholder="Harga Pasar" required>
                		@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


			  		<div class="control-group {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Jual</label>
			  			<div class="controls">	
			  			<input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual" required>
			  			@if ($errors->has('harga_jual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_jual') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  	<div class="form-actions">
			  		<a class="btn btn-danger" href="{{ route('barangmaster.index') }}"><i class="icon-remove">&nbsp;Back</i></a>
              		<button type="submit" onclick="return confirm('Anda Yakin ingin Menambah Data?')" class="btn btn-primary"><i class="icon-ok">&nbsp;Save</i></button>
              	</div>

			  		
            		</form>
            	</div>
            </div>
        </div>
    </div>

@endsection