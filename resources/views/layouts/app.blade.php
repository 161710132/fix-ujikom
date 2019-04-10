<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inventory Barang</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Inventory Barang
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @if (Auth::check())
                                <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
                                </li>
                        
                
                    <li class="nav-item {{ Request::is('admin/barangmaster') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('barangmaster.index') }}">List Produk</a>
                    </li>
                        
                    <li class="nav-item {{ Request::is('admin/customer') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('customer.index') }}">Customer</a>
                    </li>

                    <li class="nav-item {{ Request::is('admin/supplier') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('supplier.index') }}">Supplier</a>
                    </li>
                        
                    <li class="nav-item {{ Request::is('admin/barangmasuk') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('barangmasuk.index') }}">Produk Masuk</a>
                    </li>
                    
                    <li class="nav-item {{ Request::is('admin/barangkeluar') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('barangkeluar.index') }}">Produk Keluar</a>
                    </li>
             
                    <li class="nav-item {{ Request::is('karyawan/barangmasuk') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('barangmasuk.index') }}">Produk Masuk</a>
                    </li>
                        
                    <li class="nav-item {{ Request::is('karyawan/barangkeluar') ? 'active' : ''}}">
                        <a href="{{ url('barangkeluar.index') }}">Produk Keluar</a>
                    </li>
                   
                @endif
            </ul>

                        <!-- <ul class="nav navbar-nav">
                            @if (auth()->check())
                                <li><a href="{{ url('/settings/profile') }}">Profil</a></li>
                            @endif
                        </ul> -->

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/js/custom.js"></script>
                @yield('scripts')
</body>
</html>
