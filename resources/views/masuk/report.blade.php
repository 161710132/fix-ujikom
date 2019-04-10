<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
    </head>
    <body>
        
        <style type="text/css">
            .tabel { border-collapse: collapse; }
            .tabel th { padding: 8px 5px; background-color: #f60; color: #fff; }
            .tabel td { padding: 3px; }
        </style>
       
        

            <div style="padding: 4mm; border: 1px solid;" align="center">
                <p>
                <span style="font-size: 25px;">Laporan Pemasukan</span>
                
            </p>
            </div>
            <br>
            <br>
           
      
        
            <table class="table" border="1px" >
                <tr>
                    <th>Nama Barang</th>
                    <th>Jenis</th>
                    <th>Quantity</th>
                    <th>Harga</th>
                    <th>Nama Customer</th>
                    <th>Nama Karyawan</th>
                    <th>Tanggal Masuk</th> 
                </tr>

                @foreach ($Laporanmasuk as $data)
                <tr>
              
              <td>{{ $data->Barang_master->nama_barang }}</td>
              <td><p>{{ $data->Barang_master->jenis_barang }}</p></td>
              <td><p>{{ $data->quantity }}</p></td>
              <td><p>{{ $data->harga_barang }}</p></td>
              <td><p>{{ $data->Customer->nama_customer }}</p></td>
              <td><p>{{ $data->User->name }}</p></td>
              <td><p>{{ $data->created_at }}</p></td>
                </tr>
                @endforeach

               
                
            </table>
        </page>
        <h4>Hormat Kami</h4>
      

        </div>
    </body>
</html>
