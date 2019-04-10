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
                <span style="font-size: 25px;">Data Produk</span>
                
            </p>
            </div>
            <br>
            <br>
           
      
        
            <table class="table" border="1px" >
<tr>
           
                    <th bgcolor="#C0C0C0">Nama Barang</th>
                      <th bgcolor="#C0C0C0">Jenis</th>
                      <th bgcolor="#C0C0C0">Satuan</th>
                      <th bgcolor="#C0C0C0">Quantity</th>
                      <th bgcolor="#C0C0C0">Harga Beli</th>
                      <th bgcolor="#C0C0C0">Harga Jual</th>
           >
        </tr>

                @foreach ($barangmaster as $data)
                <tr>
                    <td>{{ $data->nama_barang }}</td>
                    <td><p>{{ $data->jenis_barang }}</p></td>
                    <td><p>{{ $data->satuan }}</p></td>
                    <td><p>{{ $data->quantity}}</p></td>
                    <td><p>Rp.{{ $data->harga_barang}}</p></td>
                    <td><p>{{ $data->harga_jual}}</p></td>
                </tr>
                @endforeach

               
                
            </table>
        </page>
      

        </div>
    </body>
</html>
