<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset ('template/html/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/matrix-media.css')}}" />
<link href="{{ asset ('template/html/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset ('template/html/css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{ asset ('template/html/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/uniform.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/select2.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset ('template/html/css/matrix-media.css')}}" />
<link rel="stylesheet" href="{{ asset ('assets/libs/datatables/media/css/jquery.dataTables.min.css')}}" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
    <!--sidebar-menu-->
        
        @include('partials.sidebar')

    <!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

        <!-- start content -->
<!--Action boxes-->
  @yield('boxes')
<!--End-Action boxes-->    
<!--Chart-box-->    
<!--End-Chart-box--> 
    
    @yield('content')    

        <!-- End Content -->

<!--end-main-container-part-->

<!--Footer-part-->


<!--end-Footer-part-->

<script src="{{ asset ('template/html/js/excanvas.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/fullcalendar.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.dashboard.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.gritter.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.interface.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.chat.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.validate.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.form_validation.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.wizard.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset ('template/html/js/select2.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.popover.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.tables.js')}}"></script> 

<!-- data table -->

<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset ('template/html/js/select2.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.tables.js')}}"></script>

<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset ('template/html/js/select2.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.tables.js')}}"></script>


<!-- form input -->

<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap-colorpicker.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap-datepicker.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.toggle.buttons.js')}}"></script> 
<script src="{{ asset ('template/html/js/masked.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset ('template/html/js/select2.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.form_common.js')}}"></script> 
<script src="{{ asset ('template/html/js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap-wysihtml5.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/media/js/jquery.dataTables.min.js')}}"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
    
<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset ('template/html/js/select2.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.validate.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.form_validation.js')}}"></script>

<!--end-Footer-part-->

<script src="{{ asset ('template/html/js/excanvas.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/fullcalendar.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.dashboard.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.gritter.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.interface.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.chat.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.validate.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.form_validation.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.wizard.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset ('template/html/js/select2.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.popover.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.tables.js')}}"></script> 

<script src="{{ asset ('template/html/js/jquery.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.pie.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.charts.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{ asset ('template/html/js/matrix.js')}}"></script> 
<script src="{{ asset ('template/html/js/jquery.peity.min.js')}}"></script> 

<script type="text/javascript">
$(function () {
    var datasets = {
        "usa": {
            label: "USA",
            data: [[1988, 483994], [1989, 479060], [1990, 457648], [1991, 401949], [1992, 424705], [1993, 402375], [1994, 377867], [1995, 357382], [1996, 337946], [1997, 336185], [1998, 328611], [1999, 329421], [2000, 342172], [2001, 344932], [2002, 387303], [2003, 440813], [2004, 480451], [2005, 504638], [2006, 528692]]
        },        
        "russia": {
            label: "Russia",
            data: [[1988, 218000], [1989, 203000], [1990, 171000], [1992, 42500], [1993, 37600], [1994, 36600], [1995, 21700], [1996, 19200], [1997, 21300], [1998, 13600], [1999, 14000], [2000, 19100], [2001, 21300], [2002, 23600], [2003, 25100], [2004, 26100], [2005, 31100], [2006, 34700]]
        },
        "uk": {
            label: "UK",
            data: [[1988, 62982], [1989, 62027], [1990, 60696], [1991, 62348], [1992, 58560], [1993, 56393], [1994, 54579], [1995, 50818], [1996, 50554], [1997, 48276], [1998, 47691], [1999, 47529], [2000, 47778], [2001, 48760], [2002, 50949], [2003, 57452], [2004, 60234], [2005, 60076], [2006, 59213]]
        },
        "germany": {
            label: "Germany",
            data: [[1988, 55627], [1989, 55475], [1990, 58464], [1991, 55134], [1992, 52436], [1993, 47139], [1994, 43962], [1995, 43238], [1996, 42395], [1997, 40854], [1998, 40993], [1999, 41822], [2000, 41147], [2001, 40474], [2002, 40604], [2003, 40044], [2004, 38816], [2005, 38060], [2006, 36984]]
        },
        "denmark": {
            label: "Denmark",
            data: [[1988, 3813], [1989, 3719], [1990, 3722], [1991, 3789], [1992, 3720], [1993, 3730], [1994, 3636], [1995, 3598], [1996, 3610], [1997, 3655], [1998, 3695], [1999, 3673], [2000, 3553], [2001, 3774], [2002, 3728], [2003, 3618], [2004, 3638], [2005, 3467], [2006, 3770]]
        },
        "sweden": {
            label: "Sweden",
            data: [[1988, 6402], [1989, 6474], [1990, 6605], [1991, 6209], [1992, 6035], [1993, 6020], [1994, 6000], [1995, 6018], [1996, 3958], [1997, 5780], [1998, 5954], [1999, 6178], [2000, 6411], [2001, 5993], [2002, 5833], [2003, 5791], [2004, 5450], [2005, 5521], [2006, 5271]]
        },
        "norway": {
            label: "Norway",
            data: [[1988, 4382], [1989, 4498], [1990, 4535], [1991, 4398], [1992, 4766], [1993, 4441], [1994, 4670], [1995, 4217], [1996, 4275], [1997, 4203], [1998, 4482], [1999, 4506], [2000, 4358], [2001, 4385], [2002, 5269], [2003, 5066], [2004, 5194], [2005, 4887], [2006, 4891]]
        }
    };

    // hard-code color indices to prevent them from shifting as
    // countries are turned on/off
    var i = 0;
    $.each(datasets, function(key, val) {
        val.color = i;
        ++i;
    });
    
    // insert checkboxes 
    var choiceContainer = $("#choices");
    $.each(datasets, function(key, val) {
        choiceContainer.append('<br/><input type="checkbox" name="' + key +
                               '" checked="checked" id="id' + key + '">' +
                               '<label for="id' + key + '">'
                                + val.label + '</label>');
    });
    choiceContainer.find("input").click(plotAccordingToChoices);

    
    function plotAccordingToChoices() {
        var data = [];

        choiceContainer.find("input:checked").each(function () {
            var key = $(this).attr("name");
            if (key && datasets[key])
                data.push(datasets[key]);
        });

        if (data.length > 0)
            $.plot($("#placeholder"), data, {
                yaxis: { min: 0 },
                xaxis: { tickDecimals: 0 }
            });
    }

    plotAccordingToChoices();
});
</script>

<script src="{{ asset ('template/html/js/matrix.dashboard.js')}}"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

</body>
</html>
