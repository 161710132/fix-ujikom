@extends('layouts.admin2')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h3>Show Supplier</h3>
            	<br>
          </div>
          	<div class="widget-content nopadding">
          		<form id="form-wizard" class="form-horizontal">


        			<div class="control-group">
			  			<label class="control-label">Nama : {{ $supplier->nama}}</label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Alamat : {{ $supplier->alamat}}</label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">No Telphone : {{ $supplier->no_telepon}}</label>
			  			
			  	</div>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove">Back</i></a></div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection