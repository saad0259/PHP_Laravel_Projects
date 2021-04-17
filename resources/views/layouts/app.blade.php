<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Supply Chain') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href={{url("/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css")}}>
        <link rel="stylesheet" href={{url("/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css")}}>
        <link rel="stylesheet" href={{url("/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css")}}>
        <link rel="stylesheet" href={{url("/assets/vendors/css/vendor.bundle.base.css")}}>
        <link rel="stylesheet" href={{url("/assets/vendors/css/vendor.bundle.addons.css")}}>
        <link rel="stylesheet" href={{url("/assets/css/shared/style.css")}}>
        <link rel="stylesheet" href={{url("/assets/css/demo_1/style.css")}}>

        @yield('custom_style')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <div class="container-scroller">
    
    
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
              <a class="navbar-brand brand-logo" href="/dashboard">
                <img src="/assets/images/logo.svg" alt="logo" /> </a>
              <a class="navbar-brand brand-logo-mini" href="/dashboard">
                <img src="/assets/images/logo-mini.svg" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +92 301 6903908</li>
                <li class="nav-item dropdown language-dropdown">
                  <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="d-inline-flex mr-0 mr-md-3">
                      <div class="flag-icon-holder">
                        <i class="flag-icon flag-icon-us"></i>
                      </div>
                    </div>
                    <span class="profile-text font-weight-medium d-none d-md-block">English</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                    <a class="dropdown-item">
                      <div class="flag-icon-holder">
                        <i class="flag-icon flag-icon-us"></i>
                      </div>English
                    </a>
                    <a class="dropdown-item">
                      <div class="flag-icon-holder">
                        <i class="flag-icon flag-icon-fr"></i>
                      </div>French
                    </a>
                    <a class="dropdown-item">
                      <div class="flag-icon-holder">
                        <i class="flag-icon flag-icon-ae"></i>
                      </div>Arabic
                    </a>
                    <a class="dropdown-item">
                      <div class="flag-icon-holder">
                        <i class="flag-icon flag-icon-ru"></i>
                      </div>Russian
                    </a>
                  </div>
                </li>
              </ul>
              <form class="ml-auto search-form d-none d-md-block" action="#">
                <div class="form-group">
                  <input type="search" class="form-control" placeholder="Search Here">
                </div>
              </form>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count">7</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    <a class="dropdown-item py-3">
                      <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                      <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                      </div>
                      <div class="preview-item-content flex-grow py-2">
                        <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                        <p class="font-weight-light small-text"> The meeting is cancelled </p>
                      </div>
                    </a>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                      </div>
                      <div class="preview-item-content flex-grow py-2">
                        <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                        <p class="font-weight-light small-text"> The meeting is cancelled </p>
                      </div>
                    </a>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                      </div>
                      <div class="preview-item-content flex-grow py-2">
                        <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                        <p class="font-weight-light small-text"> The meeting is cancelled </p>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count bg-success">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item py-3 border-bottom">
                      <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                      <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                      <div class="preview-thumbnail">
                        <i class="mdi mdi-alert m-auto text-primary"></i>
                      </div>
                      <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                        <p class="font-weight-light small-text mb-0"> Just now </p>
                      </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                      <div class="preview-thumbnail">
                        <i class="mdi mdi-settings m-auto text-primary"></i>
                      </div>
                      <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                        <p class="font-weight-light small-text mb-0"> Private message </p>
                      </div>
                    </a>
                    <a class="dropdown-item preview-item py-3">
                      <div class="preview-thumbnail">
                        <i class="mdi mdi-airballoon m-auto text-primary"></i>
                      </div>
                      <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                        <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                  <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="/assets/uploads/images/default_dp.png" alt="Profile image"> </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                      <img class="img-md rounded-circle" style="display: block;margin: 0 auto" src="/assets/uploads/images/default_dp.png" alt="Profile image">
                      <p class="mb-1 mt-3 font-weight-semibold">Admin</p>
                      {{-- <p class="font-weight-light text-muted mb-0">saadshafiq259@gmail.com</p> --}}
                    </div>
                    {{-- <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                    <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                    <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                    <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a> --}}

                    {{-- <a href="{{ route('logout') }}" type="submit" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                        <i class="dropdown-item-icon ti-power-off"></i>
                    </a>
                    </form>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </nav>
          <!-- partial -->
    
    
          <div class="container-fluid page-body-wrapper">
    
    
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                {{-- <li class="nav-item nav-profile">
                  <a href="#" class="nav-link">
                    <div class="profile-image">
                      <img class="img-xs rounded-circle" src="/assets/images/faces/my_dp.png" alt="profile image">
                      <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                      <p class="profile-name">Saad Shafiq</p>
                      <p class="designation">Site Developer</p>
                    </div>
                  </a>
                </li> --}}
                <li class="nav-item nav-category">Admin  Menu</li>
                <li class="nav-item">
                  <a class="nav-link" href="/dashboard">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#dealer-info" aria-expanded="false" aria-controls="dealer-info">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Dealer Info</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="dealer-info">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/dealer">View All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/dealer/create">Add New</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#item-info" aria-expanded="false" aria-controls="item-info">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Item Info</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="item-info">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/item">View All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/item/create">Add New</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
    
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#subitem-info" aria-expanded="false" aria-controls="subitem-info">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Subitem Info</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="subitem-info">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/subitem">View All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/subitem/create">Add New</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
    
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#stock-info" aria-expanded="false" aria-controls="stock-info">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Stock Info</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="stock-info">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/stock">View All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/stock/create">Add New</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
    
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#unit-info" aria-expanded="false" aria-controls="unit-info">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Unit Info</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="unit-info">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/unit">View All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/unit/create">Add New</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
    
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#admin-info" aria-expanded="false" aria-controls="admin-info">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Admin Info</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="admin-info">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/user">View All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/user/create">Add New</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>

                {{--<li class="nav-item">
                  <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="menu-icon typcn typcn-th-large-outline"></i>
                    <span class="menu-title">Charts</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="menu-icon typcn typcn-bell"></i>
                    <span class="menu-title">Tables</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/icons/font-awesome.html">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Icons</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login.html"> Login </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html"> Register </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                      </li>
                    </ul>
                  </div>
                </li> --}}
              </ul>
            </nav>
            <!-- partial -->
    
    
    
            <div class="main-panel">
    
              <div class="content-wrapper">
    
                @yield('content')
    
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:partials/_footer.html -->
              <footer class="footer">
                <div class="container-fluid clearfix">
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © DCO Office Vehari</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made with ❤ by <a href="https://www.fiverr.com/team_technest" >Team TechNest</a> </span>
                </div>
              </footer>
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="/assets/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="/assets/js/shared/off-canvas.js"></script>
        <script src="/assets/js/shared/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="/assets/js/demo_1/dashboard.js"></script>
        <!-- End custom js for this page-->
        {{-- <script src={{url("/assets/js/shared/jquery.cookie.js")}} type="text/javascript"></script>
         --}}
        
        @yield('custom_js')
        
      </body>
</html>
