<!DOCTYPE html>
<html lang="en">
<?php 
use App\business;
 $businesses = business::all();

   


?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
   {!! Html::style('melody/vendors/iconfonts/font-awesome/css/all.min.css') !!}
   {!! Html::style('melody/vendors/css/vendor.bundle.base.css') !!}
   {!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  {!! Html::style('melody/css/style.css') !!}
  @yield('styles')
  <!-- endinject -->

  @php
    $isCreatePage = request()->routeIs('users.create');
    $isCreaterole = request()->routeIs('roles.create');
    $isCreatecategor = request()->routeIs('categories.create');
    $isCreateclient = request()->routeIs('clients.create');
    $isCreateprodcut = request()->routeIs('products.create');
    $isCreatepurchase= request()->routeIs('purchases.create');
    $isCreatesale = request()->routeIs('sales.create');
    $isCreatprovide = request()->routeIs('providers.create');
    $isCreatreportdia = request()->routeIs('reports.day');
    $isCreatreportdate = request()->routeIs('reports.date'); 
    $isCreatreportresil = request()->routeIs('report.results'); 

    $isEditPage = request()->routeIs('users.edit');
    $isEditrole = request()->routeIs('roles.edit');
    $isEditcategorie = request()->routeIs('categories.edit');
     $isEditclient = request()->routeIs('clients.edit');
     $isEditproduct = request()->routeIs('products.edit');
     $isEditprovides = request()->routeIs('providers.edit');
@endphp
@if ( $isCreatreportresil || $isCreatreportdate || $isCreatreportdia || $isCreatePage || $isCreaterole || $isCreatecategor ||  $isCreateclient || $isCreateprodcut ||  $isCreatepurchase || $isCreatesale || $isCreatprovide)
<link rel="shortcut icon" href="../melody/images/logo_libro.jpeg" />

@elseif ($isEditPage || $isEditrole || $isEditcategorie ||  $isEditclient || $isEditproduct ||  $isEditprovides )
<link rel="shortcut icon" href="/melody/images/logo_libro.jpeg" />
@else
<link rel="shortcut icon" href="melody/images/logo_libro.jpeg" />
@endif


</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar navbar-info">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('home')}}">

@foreach ($businesses as $business)
    @if ( $isCreatreportresil || $isCreatreportdate || $isCreatreportdia || $isCreatePage || $isCreaterole || $isCreatecategor ||  $isCreateclient || $isCreateprodcut ||  $isCreatepurchase || $isCreatesale || $isCreatprovide)
        <img src="../image/{{ $business->logo }}" class="img-fluid" alt="">

    @elseif ($isEditPage || $isEditrole || $isEditcategorie ||  $isEditclient || $isEditproduct ||  $isEditprovides )
    <img src="/image/{{ $business->logo }}" class="img-fluid" alt="">
    @else
        <img src="image/{{ $business->logo }}" class="img-fluid" alt="">
    @endif
@endforeach


</a>
        <a class="navbar-brand brand-logo-mini" href="{{route('home')}}"><img src="image/{{ $business->logo }}" class="img-fluid"  alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <!-- <i class="fas fa-search"></i> -->
                  </span>
                </div>
                <!-- <input type="text" class="form-control" placeholder="Search" aria-label="Search"> -->
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-flex">
            <!-- <a class="nav-link" href="#">
              <span class="btn btn-primary">+ Create new</span>
            </a> -->
          </li>
         
         
      
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            @if ( $isCreatreportresil || $isCreatreportdate || $isCreatreportdia || $isCreatePage || $isCreaterole || $isCreatecategor ||  $isCreateclient || $isCreateprodcut ||  $isCreatepurchase || $isCreatesale || $isCreatprovide)
            <img src="../melody/images/faces/face21.jpg" alt="profile"/>

    @elseif ($isEditPage || $isEditrole || $isEditcategorie ||  $isEditclient || $isEditproduct ||  $isEditprovides )
    <img src="/melody/images/faces/face21.jpg" alt="profile"/>
    @else
    <img src="melody/images/faces/face21.jpg" alt="profile"/>
    @endif

            
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{route('business.index')}}">
                <i class="fas fa-cog text-primary"></i>
               Configuracion
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item"  href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off text-primary"></i>
              
               Cerrar Sesion
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      @yield('preference')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts._nav')
 
      <!-- partial -->
      <div class="main-panel">
          @yield('content')
        <div class="content-wrapper">
          <div class="page-header">
            
          </div>
</div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <span id="currentYear"></span>.{{ $business->name }} </span>
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script>
    var currentYear = new Date().getFullYear();
    document.getElementById("currentYear").innerHTML = currentYear;
</script>

  <!-- plugins:js -->
 {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
 {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  {!! Html::script('melody/js/off-canvas.js') !!}
    {!! Html::script('melody/js/hoverable-collapse.js') !!}
        {!! Html::script('melody/js/misc.js') !!}
            {!! Html::script('melody/js/settings.js') !!}
                {!! Html::script('melody/js/todolist.js') !!}
  <!-- endinject -->
  <!-- Custom js for this page-->
  {!! Html::script('melody/js/dashboard.js') !!}
  <!-- End custom js for this page-->
  @yield('scripts')
</body>


</html>
