@extends('layouts.admin3')
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')

				<div class="card">
					<div class="card">
                        <h5 class="card-title"></h5>
                            <div class="panel-title left">
                                <a class="btn btn-primary " href="{{route('barangmaster.create') }}"><i class="icon-plus">&nbsp;Tambah Produk</i></a>
									
        								<a class="btn btn-success" href="{{ url('export/barangmaster') }}"><i class="icon-download-alt">&nbsp;Export Excel</i></a>

                                 		<a class="btn btn-danger" href="{{ url('/barang/report/download') }}"><i class="icon-download-alt">&nbsp;Export PDF</i></a>
                                	
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
                                <th>Jenis Produk</th>
                                <th>Satuan</th>
                                <th>Quantity</th>
                                <th>Harga Produk</th>
                                <th>Total Harga Produk</th>
                                <th>Harga Jual</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $nomor = 1; ?>
                            @php $no = 1; @endphp
                            @foreach($barang as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td><p>{{ $data->jenis_barang }}</p></td>
                                    <td><p>{{ $data->satuan }}</p></td>
                                    <td><p>{{ $data->quantity}}</p></td>
                                    <td><p><?php echo 'Rp.' . number_format($data->harga_barang, '2',',','.') ?></p></td>
                                    <td><p><?php echo 'Rp.' . number_format($data->total, '2',',','.') ?></p></td>
                                    <td><p><?php echo 'Rp.' . number_format( $data->harga_jual, '2',',','.')?></p></td>
                                    <td>
                                        <a class="btn btn-warning btn-mini body" href="{{ route('barangmaster.edit',$data->id) }}"><i class="icon-edit"></i></a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('barangmaster.destroy',$data->id) }}"id="delete">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        <input type="hidden" id="deletee" name="_method" value="DELETE">
                                        <button type="submit" onclick="return confirm('Anda Yakin akan Menghapus Data?')" class="btn btn-danger btn-mini delete"><i class=" icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection

@section('js')
@endsection

