
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    

@role('admin')

<li><i class="fa fa-table"></i><a href="{{ route('barangmaster.index') }}">List Produk</a></li>

<li><i class="fa fa-table"></i><a href="{{ route('barangmasuk.index') }}">Produk Masuk</a></li>

<li><i class="fa fa-table"></i><a href="{{ route('barangkeluar.index') }}">Produk Keluar</a></li>

<li><i class="fa fa-table"></i><a href="{{ route('customer.index') }}">Customer</a></li>

<li><i class="fa fa-table"></i><a href="{{ route('supplier.index') }}">Supplier</a></li>

<li><i class="fa fa-table"></i><a href="{{ route('laporan.index') }}">Laporan</a></li>

@endrole

@role('member')

<li><i class="fa fa-table"></i><a href="{{ route('barangmasuk.index') }}">Produk Masuk</a></li>

<li><i class="fa fa-table"></i><a href="{{ route('barangkeluar.index') }}">Produk Keluar</a></li>

@endrole

    </ul>
    </div>







