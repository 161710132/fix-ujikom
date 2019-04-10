@extends('layouts.admin2')
@section('content')
            <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            
          </div>
              <form action="{{url('/reportuntung')}}" method="post">
                  {{csrf_field()}}

                  <div class="form-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
              <label class="control-label ">Pilih Customer</label> 
              <select name="customer" id="customer" class="select2 form-control custom-select" style="width: 30%; height: 10px;">
                @foreach($customer as $data)
                <option value="{{ $data->id }}">{{ $data->nama_customer }}</option>
                @endforeach
              </select>
            </div><br>

            


           <div class="form-group row {{ $errors->has('id_barang') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Produk </label>  
              <div class="col-sm-5">
              <input type="number" name="nama_barang" id="nama_barang" class="form-control"  readonly>
              
            </div>
          </div>

                <div class='col-sm-4'>
                   Dari Tanggal :
                    <input type='date' name="tglmasuk" class="form-control" />
                            
                    Sampai Tanggal :
                    <input type='date' name="tglkeluar" class="form-control" />
                </div>
                   <br>
                       
                 <button type="submit" name="submit" value="submit" class="btn btn-default">Filter</button> <br>
                </form>



              </div>
            </div>
          </div>
          <br>
        </div>


        @endsection

@section('js')

<script type="text/javascript">
  $("#customer").change(function()
    {
        var id=$(this).val();
        $.ajax
        
        ({

        type: "GET",
        url: "/keuntungan/getIdCustomer",
        data: {id: id},
        cache: false,
        dataType:"json",
        success: function(data)
      {
        $("input[name='id_customer']").val(data.id);
        $("input[name='nama_barang']").val(data.id);

        

        

    }



  });
      });
</script>

@endsection
