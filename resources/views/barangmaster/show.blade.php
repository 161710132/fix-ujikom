@extends('layouts.admin2')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h3>Show Produk</h3>
            	<br>
          </div>
          <div class="widget-content nopadding">
          	<form id="form-wizard" class="form-horizontal">
          		
        			<div class="control-group">
			  			<label class="control-label"><h5>Nama Produk : {{ $barangmaster->nama_barang}}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Jenis Barang : {{ $barangmaster->jenis_barang}}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Satuan : {{ $barangmaster->satuan}}</label>	</h5>
			  		</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Quantity : {{ $barangmaster->quantity }}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Harga Produk : {{ $barangmaster->harga_barang}}</h5></label>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Harga Jual : {{ $barangmaster->harga_jual}}</h5></label>	
			  			
			  	</div>
			  		<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove">Back</i></a></div>
			  	</label>
			  </div>
			
		</form>
	</div>
</div>
</div>
</div>
</div>

@endsection