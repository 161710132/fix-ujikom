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
			  			<label class="control-label"><h5>Produk Keluar {{ $barangkeluar->Barang_master->nama_barang }}</h5></label>
			  			
			  	</div>

        			<div class="control-group">
			  			<label class="control-label"><h5>Quantity {{ $barangkeluar->quantity }}</h5></label>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Harga Barang {{ $barangkeluar->harga_barang }}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Customer {{ $barangkeluar->Customer->nama_customer }}</h5></label>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Karyawan {{ $barangkeluar->User->name }}</h5></label>
			  			
			  	</div>
			  		<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove">Back</i></a></div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection