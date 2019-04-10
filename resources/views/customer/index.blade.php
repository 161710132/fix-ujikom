@extends('layouts.admin3')
@section('content')
<div class="card">
    <div class="card">
        <h5 class="card-title"></h5>
            <div class="panel-title left">
                <a class="btn btn-primary " href="{{route('customer.create') }}"><i class="icon-plus">&nbsp;Tambah Produk</i></a>
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
                              <th>Nama Customer</th>
                              <th>Alamat</th>
                              <th>No Telphone</th>
                              <th>Tanggal Mulai</th>
                              <th>Tanggal Akhir</th>
                              <th>Status</th>
                              <th></th>
                              <th></th>
                           </tr>
                         </thead>

                        <tbody>
                        <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($customer as $data)
                     <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama_customer }}</td>
                        <td><p>{{ $data->alamat }}</p></td>
                        <td><p>{{ $data->no_telpon}}</p></td>
                        <td><p>{{ $data->tgl_mulai}}</p></td>
                        <td><p>{{ $data->tgl_akhir}}</p></td>
                        @if($data->status == "Activate")
                                            <td>
                                                <center><a class="btn btn-success" disable><i class="ti-pencil"></i> Aktif</a> </center>
                                            </td>
                        @elseif($data->status == "Deactivate")
                                            <td><center><a class="btn btn-danger" id="tdkaktif" disable>Tidak Aktif</a></center></td>
                        @endif
                        <td>
                            <center><a class="btn btn-warning " href="{{ route('customer.edit',$data->id) }}"><i class="icon-edit"></i></a></center>
                        </td>
                        <td>
                            <form method="post" action="{{ route('customer.destroy',$data->id) }}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">

                            <center><button type="submit" onclick="return confirm('Anda Yakin ingin Menghapus Data?')" class="btn btn-danger "><i class=" icon-trash"></i></button></center>
                            </form>
                        </td>
                    </tr>

@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('customer.modal')
@endsection


@section('js')

<script type="text/javascript">
  $(document).ready(function() {
   $('#tdkaktif').click(function(){
      $('#aktifModal').modal('show');
    });

    $('#bank-modal').submit(function(e){
        var formData    = new FormData($('#bank-modal')[0]);
        e.preventDefault();
        $.ajax({
            url:'{{ url('/modal') }}'+ '/' + $('id').val(),
            type:'POST',
            data:formData,
            cache: true,
            contentType: false,
            processData: false,
            async:true,
            dataType: 'json',
            success:function(response){
                $('#aktifModal').modal('hide');
                $('#zero_config').DataTable().ajax.reload();
            },
            complete: function() {
                $("#bank-modal")[0].reset();
            }
        });
    });

  });
</script>



@endsection 