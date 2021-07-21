<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Stock Management</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
  
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{--  jquery  --}}
{{--  <script src="jquery-3.5.1.min.js"></script>  --}}
{{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  --}}
{{--  <script src="new.js"></script>  --}}

{{-- {{asset('stock_management_dashboard//')}} --}}
  <!-- PLUGINS CSS STYLE -->
   <link href="{{asset('stock_management_dashboard/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" /> 
   <link href="{{asset('stock_management_dashboard/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" /> 
   <link href="{{asset('stock_management_dashboard/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/> 
  <link href="{{asset('stock_management_dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('stock_management_dashboard/assets/plugins/ladda/ladda.min.css" rel="stylesheet')}}" />
  <link href="{{asset('stock_management_dashboard/assets/plugins/select2/css/select2.min.css" rel="stylesheet')}}" />
   <link href="{{asset('stock_management_dashboard/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" /> 

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('stock_management_dashboard/assets/css/sleek.css')}}" />

  <!-- FAVICON -->
  <link href="{{asset('stock_management_dashboard/assets/img/favicon.png" rel="shortcut icon')}}" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
   <script src="{{asset('stock_management_dashboard/assets/plugins/nprogress/nprogress.js')}}"></script> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    {{-- <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script> --}}

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">ProductM LOGO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub expand" >
                    <a class="sidenav-item-link" href="/" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                
                  <li class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#received"
                      aria-expanded="false" aria-controls="received">
                      <i class="mdi mdi-truck-delivery"></i>
                      <span class="nav-text">Received Materials</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="received"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                            <li ><a class="sidenav-item-link" href="/create-received"><span class="nav-text">Create</span></a></li>
                            <li ><a class="sidenav-item-link" href="/view-received"><span class="nav-text">View </span></a></li>
                      </div>
                    </ul>
                  </li>
                
                  <li class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#issued"
                      aria-expanded="false" aria-controls="issued">
                      <i class="mdi mdi-clipboard-arrow-left"></i>
                      <span class="nav-text">Issued Materials</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="issued"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li><a class="sidenav-item-link" href="/create-issued"><span class="nav-text">Create</span></a></li>
                            <li ><a class="sidenav-item-link" href="/view-issue_all"><span class="nav-text">View </span></a></li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#rack_bin"
                      aria-expanded="false" aria-controls="rack_bin">
                      <i class="mdi mdi-cart-outline"></i>
                      <span class="nav-text">Bins | Racks</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="rack_bin" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li class="section-title">Rack</li>
                            <li><a class="sidenav-item-link" href="/create-rack"><span class="nav-text"><i class="mdi mdi-table-plus"></i>  Create</span></a></li>
                            <li><a class="sidenav-item-link" href="/view-rack_all"><span class="nav-text"><i class="mdi mdi-table-search"></i>  view</span></a></li>
                            <li class="section-title">Bin</li>
                            <li ><a class="sidenav-item-link" href="/create-bin"><span class="nav-text"><i class="mdi mdi-table-column-plus-after"></i>  Create</span></a></li>
                            <li><a class="sidenav-item-link" href="/view-bin_all"><span class="nav-text"><i class="mdi mdi-table-search"></i>  view</span></a></li>
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="/summary">
                    
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Summary</span>
                    </a>
                  </li>

               </ul>

            </div>

          </div>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              {{-- <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div> --}}

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  {{-- <li class="github-link mr-3">
                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                      <span class="d-none d-md-inline-block mr-2">Source Code</span>
                      <i class="mdi mdi-github-circle"></i>
                    </a>

                  </li> --}}

                  {{-- <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li> --}}
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header><!--header end-->

        <div class="content-wrapper">
            <div class="content">

                @yield('admin')

            </div>
        </div>

    
        


        </div>

      </div>
    </div>

    @include('structures.stock_manage_footer')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('stock_management_dashboard/assets/plugins/toaster/toastr.min.js')}}"></script> 
<script src="{{asset('stock_management_dashboard/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
 <script src="{{asset('stock_management_dashboard/assets/plugins/charts/Chart.min.js')}}"></script> 
<script src="{{asset('stock_management_dashboard/assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
 <script src="{{asset('stock_management_dashboard/assets/plugins/daterangepicker/moment.min.js')}}"></script> 
 <script src="{{asset('stock_management_dashboard/assets/plugins/daterangepicker/daterangepicker.js')}}"></script> 
<script src="{{asset('stock_management_dashboard/assets/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('stock_management_dashboard/assets/js/sleek.js')}}"></script>
 <script src="{{asset('stock_management_dashboard/assets/js/chart.js')}}"></script> 
 <script src="{{asset('stock_management_dashboard/assets/js/date-range.js')}}"></script> 
 <script src="{{asset('stock_management_dashboard/assets/js/map.js')}}"></script> 
 <script src="{{asset('stock_management_dashboard/assets/js/custom.js')}}"></script> 




@include('sweetalert::alert')
  </body>
</html>
