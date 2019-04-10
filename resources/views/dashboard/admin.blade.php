@extends('layouts.admin2')
@section('content')

<div class="panel-body">
Selamat datang di Menu Administrasi Larapus. Silahkan pilih menu administrasi yang diinginkan.
<hr>
	<h4>Statistik Penulis</h4>
		<canvas id="chartPenulis" width="400" height="150"></canvas>
	</div>

@endsection

@section('js')

<script src="/js/Chart.min.js"></script>

<script type="text/javascript">
	var data = {
		labels: {!! json_encode($masuk) !!},
		datasets: [{
			label: 'Jumlah Produk',
			data: {!! json_encode($keluar) !!},
			backgroundColor: "rgba(151,187,205,0.5)",
			borderColor: "rgba(151,187,205,0.8)",
		}]
	};

	var options = {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true,
					stepSize: 1
				}
			}]
		}
	};

	var ctx = document.getElementById("chartPenulis").getContext("2d");

	var keluarChart = new Chart(ctx, {
		type: 'bar',
		data: data,
		options: options
	});

</script>


@endsection