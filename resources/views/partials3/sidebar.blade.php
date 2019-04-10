<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ route('home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> 
      <a href="{{ route('barangmaster.index') }}"><i class="icon icon-signal"></i> <span>List Produk</span></a> 
    </li>

    <li> 
      <a href="{{ route('barangmasuk.index') }}"><i class="icon icon-inbox"></i> <span>Produk Masuk</span></a> 
    </li>

    <li>
      <a href="{{ route('barangkeluar.index') }}"><i class="icon icon-th"></i> <span>Produk Keluar</span></a>
    </li>

    <li>
      <a href="{{ route('customer.index') }}"><i class="icon icon-fullscreen"></i> <span>Customer</span></a>
    </li>

  <li>
    <a href="{{ route('supplier.index') }}"><i class="icon icon-pencil"></i> <span>Supplier</span></a>
  </li>

  </ul>
</div>
<!--sidebar-menu-->