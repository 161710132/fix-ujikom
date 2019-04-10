@extends('layouts.admin3')
@section('content')
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">    
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah Data Supplier</h5>
        </div>
           <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
                  <!-- Data Supplier -->

             <div class="control-group {{ $errors->has('id_supplier') ? ' has-error' : '' }}">
              <label class="control-label">Pilih Supplier</label>
              <div class="controls">
              <select name="supplier" id="supplier" class="form-control custom-select" style="width: 60%; height: 30px;">
                @foreach($supplier as $data)
                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>

           

             <div class="control-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
              <label class="control-label">Alamat </label>
              <div class="controls">  
              <input type="text" name="alamat" id="alamat" class="form-control"  readonly>
            </div>
          </div>

          <div class="control-group {{ $errors->has('no_telepon') ? ' has-error' : '' }}">
              <label class="control-label">No Telphone </label>
              <div class="controls">  
              <input type="text" name="no_telepon" class="form-control " id="no_telepon"  readonly>
           </div>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>
</div>

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span9">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah Data Produk Masuk</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('barangmasuk.store') }}" id="insert_form"  class="form-horizontal" method="post" >
            {{ csrf_field() }}
        
        <div class="widget-content nopadding">
          <form action="{{ route('barangkeluar.store') }}" method="post" id="insert_form"  class="form-horizontal" >
            {{ csrf_field() }}

          <div class="form-body content" id="bm_create">
            <table id="item_table" class="table table-bordered">
              <thead>
                  <tr id="last">
                      <th >Jenis Barang</th>
                      <th >Quantity</th>
                      
                      <th> Harga Produk</th>
                      <!-- <th>Supplier</th> -->
                    
                    <th><input type="hidden" name="id_karyawan" value="{{Auth::user()->id}}">
                      <input type="hidden" name="id_supplier" id="id_supplier" class="form-control"  required>
                      <button type="button" name="add" class="btn btn-success btn-sm add" id="add"><i class="icon-plus"></i></button>
                    </th>
                  </tr>
                </thead>
                <tbody id="coba">
                  <tr id="row">
                    <td><select name="id_barang[]" class="form-control barangselect select-pilih" id="barang">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>
                    
                  <td><input type="number" name="quantity[]" class="form-control"/></td>
                  <td>
                    <input type="number" name="harga_barang[]" id="harga_barang" class="form-control harga_barang" value=""/></td>

                  <td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"><i class="icon-minus"></i></button></td>
                  </td>
                </tr>
              </tbody>
            </table>
          
          

                <div class="form-actions">
              <center><a class="btn btn-danger" href="{{ url()->previous() }}"><i class="icon-remove">&nbsp;Back</i></a>
                    <button type="submit" onclick="return confirm('Anda Yakin ingin Menambah Data?')" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="icon-ok">&nbsp;Simpan</i></button></h2></center>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

        

      <!-- End Barang Keluar  -->  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('js')

<script type="text/javascript">
 // var count = 1
      // $('#add').click(function(){
      //   count = count + 1;
      //   var html = "<tr id='row"+count+"'>";

      //   html +='<td><select name="id_barang[]" class="form-control barangselect select-pilih" id="namaproduk">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';

      //   html +='<td><input type="number" name="quantity[]" class="form-control"/></td>';

      //   html +='<td><input type="number" name="harga_barang[]" id="harga_barang" class="form-control harga_barang" value=""/></td>';

      //   html +='<td><button type="button" class="btn btn-danger btn-sm remove" data-row="row'+ count +'"><i class="fa fa-minus-square"></i></button></td></tr>';

      //   html +='<td><select name="id_supplier[]" class="form-control barangselect select-pilih" id="supplier">@foreach($supplier as $data)<option value="{{$data->id}}">{{$data->nama}}</option>@endforeach</select></td>';

        



      //   $('#coba').append(html);  
      // });

      var count = 1
      $('#add').click(function(){
        count = count + 1;
        var html = "<tr id='row"+count+"'>";

        html +='<td><select name="id_barang[]" class="form-control barangselect select-pilih" id="namaproduk">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';

        html +='<td><input type="number" name="quantity[]" class="form-control"/></td>';

        html +='<td><input type="number" name="harga_barang[]" id="harga_barang" class="form-control harga_barang" value=""/></td>';

        html +='<td><button type="button" class="btn btn-danger btn-sm remove" data-row="row'+ count +'"><i class="icon-minus"></i></button></td></tr>';



        $('#coba').append(html);  
      });

       $(document).on('click','.remove',function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
       });
      


    $("#supplier").change(function()
    {
        var id=$(this).val();
        $.ajax
        
        ({

        type: "GET",
        url: "/barangmasuk/getIdSupplier",
        data: {id: id},
        cache: false,
        dataType:"json",
        success: function(data)
      {
        $("input[name='id_supplier']").val(data.id_supplier);
        $("input[name='nama']").val(data.nama);
        $("input[name='alamat']").val(data.alamat);
        $("input[name='no_telepon']").val(data.no_telepon);
       
        

    }



  });
      });

    

</script>


@endsection