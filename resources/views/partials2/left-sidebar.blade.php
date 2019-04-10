<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
@role('admin')
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('barangmaster.index') }}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">List Produk</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Produk </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('barangmasuk.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Produk Masuk </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('barangkeluar.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Produk Keluar </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a href="{{ route('customer.index') }}" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu"> Customer </span></a></li>
                        </li>

                        <li class="sidebar-item"> <a href="{{ route('supplier.index') }}" class="sidebar-link"><i class="fas fa-shipping-fast"></i><span class="hide-menu"> Supplier </span></a></li>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book"></i><span class="hide-menu">Laporan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('masuk.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Laporan Pemasukan </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('keluar.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Laporan Pengeluaran </span></a></li>
                            </ul>
                        </li>

                        @endrole

                        @role('member')



                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Produk </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('barangmasuk.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Produk Masuk </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('barangkeluar.index') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Produk Keluar </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Laporan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('masuk.index') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Laporan Pemasukan </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('keluar.index') }}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Laporan Pengeluaran </span></a></li>
                            </ul>
                        </li>


                        @endrole
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>