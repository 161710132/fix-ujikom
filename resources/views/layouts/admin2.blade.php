<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../../template/assets/images/favicon.png')}}">
    <title>Inventory Barang</title>
    <!-- Custom CSS -->
    <link href="{{ asset('../../template/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../template/assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{ asset('../../template/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../assets/libs/select2/dist/css/select2.min.css')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('../../template/dist/css/style.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
    <style type="text/css">
        body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- Header -->

        @include('partials2.header')

        <!-- End Header -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- Left Side Bar -->

        @include('partials2.left-sidebar')

        <!-- End Left Side Bar -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('../../template/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('../../template/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('../../dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('../../dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('../../dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('../../dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('../../template/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('../../template/dist/js/pages/chart/chart-page-init.js')}}"></script>

    <!-- Data Table -->
    <!-- this page js -->
    <script src="{{ asset('../../template/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{ asset('../../template/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{ asset('../../template/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="../../assets/libs/chart/matrix.interface.js"></script>
    <script src="../../assets/libs/chart/excanvas.min.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/chart/jquery.peity.min.js"></script>
    <script src="../../assets/libs/chart/matrix.charts.js"></script>
    <script src="../../assets/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../assets/libs/chart/turning-series.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();


    </script>
    <!-- End Data Table -->


   <!-- Select -->

    <script src="{{ asset('../../template/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{ asset('../../template/dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('../../template/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    

    <script>
        $(".select2").select2();
    </script>

    

    @yield('js')

    <!-- <script type="text/javascript">
    $(".deleteRecord").click(function () {
        var id=$(this).attr('rel1');
        var deleteFunction=$(this).attr('rel1');
        swal({
             title: 'Are you sure?',
             text: "Please click confirm to delete this item",
             type: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             cancelButtonText: 'No, cancel!',
             confirmButtonClass: 'btn btn-success',
             cancelButtonClass: 'btn btn-danger',
             buttonsStyling: false,
             reverseButtons: true
         },function (){
            window.location.href="/barangmaster"+deleteFunction+"/"+id;
         });


        });
    
</script> -->


    
    

</body>

</html>