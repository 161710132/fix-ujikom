@extends('layouts.admin3')
@section('content')
@include('layouts._flash')
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">    
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah Data Customer</h5>
        </div>
           <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">


                  <!-- Data Customer -->

                 <div class="control-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
              <label class="control-label">Pilih Customer</label>
              <div class="controls"> 
              <select name="customer" id="customer" class="select2 form-control custom-select" style="width: 60%; height: 30px;">
                @foreach($customer as $data)
                <option value="{{ $data->id }}">{{ $data->nama_customer }}</option>
                @endforeach
              </select>
            </div>
          </div>

            <div class="control-group {{ $errors->has('nama_customer') ? ' has-error' : '' }}">
              <label class="control-label">Nama Customer </label>
              <div class="controls">  
              <input type="text" name="nama_customer" class="form-control" value=""  readonly>
              
            </div>
          </div>

          <div class="control-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
              <label class="control-label">Alamat</label>
              <div class="controls">  
              <input type="text" name="alamat" id="alamat" class="form-control" value=""  readonly>
              
            </div>
          </div>

          <div class="control-group {{ $errors->has('no_telpon') ? ' has-error' : '' }}">
              <label class="control-label">No Telphone </label>  
              <div class="controls">
              <input type="number" name="no_telpon" id="no_telpon" class="form-control"  readonly>
              
            </div>
          </div>


          <div class="control-group {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
              <label class="control-label">Tanggal Mulai Kerjasama </label>
              <div class="controls">  
              <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"  readonly>
              
            </div>
          </div>

            <div class="control-group {{ $errors->has('tgl_akhir') ? ' has-error' : '' }}">
              <label class="control-label">Tanggal Akhir Kerjasama</label> 
              <div class="controls">
              <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control"  readonly>
             </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>



      <!-- Barang keluar -->

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">    
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah Data</h5>
        </div>
           <div class="widget-content nopadding">
          <form action="{{ route('barangkeluar.store') }}" method="post" id="insert_form"  class="form-horizontal" >
            {{ csrf_field() }}

          <div class="form-body content" id="bm_create">
            <table id="item_table" class="table table-bordered">
              <thead>
                  <tr id="last">
                      <th >Jenis Barang</th>
                      <th >Quantity</th>
                      <th>Stok</th>
                      <th> Harga Produk</th>
                    
                    <th><input type="hidden" name="id_karyawan" value="{{Auth::user()->id}}">
                      <input type="hidden" name="id_customer" value="">
                    </th>
                    <th><button type="button" name="add" class="btn btn-success btn-sm add" id="lala"><i class="icon-plus"></i></button></th>
                  </tr>
                </thead>
                <tbody id="coba">
                  <tr id="row">
                    <td><select name="id_barang[]" class=" form-control barangselect select-pilih" id="barang">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>
                    
                  <td><input type="number" name="quantity[]" id="quantity" class="form-control"/></td>
                              
                  <td><input type="number" class="form-control quantity" readonly /></td>
                              
                  <td><input type="number" name="harga_barang[]" id="harga_barang" class="form-control harga_barang" value=""/></td>
                              
                  <td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"><i class="icon-minus"></i></button></td>
                </tr>
              </tbody>
            </table>
          
          

                <div class="form-actions">
              <center><a class="btn btn-danger" href="{{ url()->previous() }}"><i class="icon-remove">&nbsp;Back</i></a>
                    <button type="submit" onclick="return confirm('Anda Yakin ingin Menambah Data?')" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="icon-ok"></i> Simpan</button></h2></center>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 

        

      <!-- End Barang Keluar  -->  





@endsection

@section('js')
<script type="text/javascript">

var count = 1
      $('#lala').click(function(){
        count = count + 1;
        var html = "<tr id='row"+count+"'>";

        html +='<td><select name="id_barang[]" class="form-control barangselect select-pilih" id="namaproduk">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';

        html +='<td><input type="number" name="quantity[]" class="form-control"/></td>';

        html +='<td><input type="text" class="form-control quantity" readonly /></td>';


        html +='<td><input type="number" name="harga_barang[]" id="harga_barang" class="form-control harga_barang" value=""/></td>';

        html +='<td><button type="button" class="btn btn-danger btn-sm remove" data-row="row'+ count +'"><i class="icon-minus"></i></button></td></tr>';



        $('#coba').append(html);  
      });

       $(document).on('click','.remove',function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
       });

    $("#customer").change(function()
    {
        var id=$(this).val();
        $.ajax
        
        ({

        type: "GET",
        url: "/barangkeluar/getIdCustomer",
        data: {id: id},
        cache: false,
        dataType:"json",
        success: function(data)
      {
        $("input[name='id_customer']").val(data.id); 
        $("input[name='nama_customer']").val(data.id_customer);
        $("input[name='alamat']").val(data.alamat);
        $("input[name='no_telpon']").val(data.no_telpon);
        $("input[name='tgl_mulai']").val(data.tgl_mulai);
        $("input[name='tgl_akhir']").val(data.tgl_akhir);

        

    }



  });
      });

   
</script>
<script type="text/javascript">
   $('.content').delegate('.barangselect','change',function(){
      var tr = $(this).parent().parent();
      var id = tr.find('.barangselect').val();
      var dataId = {'id' : id};
      console.log(dataId);
      $.ajax({
        type      : 'GET',
        url       : '{!! url('barangkeluar/getIdBarang') !!}',
        dataType  : 'json',
        data      : dataId,

        success:function(data){
          tr.find('.harga_barang').val(data.harga_barang);
          tr.find('.quantity').val(data.quantity);
        }
      });
    });


</script>
@endsection


