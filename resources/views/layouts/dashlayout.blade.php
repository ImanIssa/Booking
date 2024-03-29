<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
  

    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboardFront/css/main.css')}}">
    
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">Dashboard</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
         
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
       
                        <li>  @auth
                        <li style="margin-left:20px">
                         {{Auth::user()->name}}</li>
                        @endauth</li>
            <li><a class="dropdown-item" href="#"  onclick="document.querySelector('.logout').submit()"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            <form action="{{route('logout')}}" method="post" class='logout'>
                            @csrf
                        </form>
          </ul>
        </li>
      </ul>
    </header>
    <main class="app-content">
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Health Center</h3>
            @yield('doc')
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
             
            </div>
          </div>
        </div>
   
</main>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://www-s3-live.kent.edu/s3fs-root/s3fs-public/styles/normal_banner/public/Deweese_0.jpg?itok=WBiVsODU" width = "100" height = "100" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Surgeon</p>
        </div>
      </div>

      
      <ul class="app-menu">
      @if (Auth::user()->type == 'Admin') 
        <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-user" aria-hidden="true"></i>
    <span class="app-menu__label">Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/AdminRead"><i class="icon fa fa-user"></i>Profile</a></li>
           <!-- <li><a class="treeview-item" href="/AdminEdit/{user_id}"><i class="icon fa fa-pencil-square-o"></i>Edit Profile</a></li>-->
          </ul>
        </li>
@endif
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">  <i class="app-menu__icon fa fa-user-md" aria-hidden="true"></i>
  <span class="app-menu__label">Doctors</span><i class="treeview-indicator fa fa-angle-right"></i></a>
 
  <ul class="treeview-menu ">
    
  @if (Auth::user()->type == 'Admin') 
            <li><a class="treeview-item" href="/DoctorCreate"><i class="icon fa fa-user"></i>Profile</a></li>
  @endif
            <li><a class="treeview-item" href="/DoctorRead" target="_blank" rel="noopener"><i class="icon fa fa-pencil-square-o"></i>View</a></li>
           
            
          </ul>
        </li>

        

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-wheelchair " aria-hidden="true"></i><span class="app-menu__label">Patients</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/PatientsRead"><i class="icon fa fa-circle-o"></i>Profile</a></li>
            
          </ul>
        </li>

       

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file" aria-hidden="true"></i></i><span class="app-menu__label">Specialties</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/SpecCreate"><i class="icon fa fa-plus"></i>Add Speciality</a></li>
            <li><a class="treeview-item" href="/SpecRead" target="_blank" rel="noopener"><i class="icon fa fa-file"></i> The Specialties</a></li>
         
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar-check-o" aria-hidden="true"></i></i><span class="app-menu__label">Appointments</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/AppCreate"><i class="icon fa fa-plus"></i>Add Appointments</a></li>
            <li><a class="treeview-item" href="/AppRead" target="_blank" rel="noopener"><i class="icon fa fa-clock-o"></i> The Appintments</a></li>
         
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar-check-o" aria-hidden="true"></i></i><span class="app-menu__label">Visits</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">

            <li><a class="treeview-item" href="/VisitRead" target="_blank" rel="noopener"><i class="icon fa fa-clock-o"></i> The patient visits</a></li>
         
          </ul>
        </li>

       
        
      </div>
</ul>
</aside> 

    <!-- Essential javascripts for application to work-->
    <script src="{{asset('dashboardFront/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dashboardFront/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboardFront/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboardFront/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('dashboardFront/js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('js/plugins/chart.js')}}"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
 
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
    </html>