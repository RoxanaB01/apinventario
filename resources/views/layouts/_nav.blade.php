

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
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
            <img src="../melody/images/faces/face21.jpg" alt="profile"/>

    @elseif ($isEditPage || $isEditrole || $isEditcategorie ||  $isEditclient || $isEditproduct ||  $isEditprovides )
    <img src="/melody/images/faces/face21.jpg" alt="profile"/>
    @else
    <img src="melody/images/faces/face21.jpg" alt="profile"/>
    @endif
              </div>
              <div class="profile-name">
                <p class="name">
                  Bienvenido {{ Auth::user()->name }}
                </p>
                <p class="designation">
                  Super Admin   
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Roles</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('roles.index')}}">Roles</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-columns menu-icon"></i>
              <span class="menu-title">Clientes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('clients.index')}}">Clientes</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="far fa-file-alt menu-icon"></i>
              <span class="menu-title">Proveedores</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('providers.index')}}">Proveedores</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basi" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-clipboard-check menu-icon"></i>
              <span class="menu-title">Categorias</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">Categorias</a></li>
               
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">Productos</a></li>
               
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="fas fa-shopping-cart menu-icon"></i>
              <span class="menu-title"> inventario</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('purchases.index')}}">compras</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fab fa-wpforms menu-icon"></i>
              <span class="menu-title">ventas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('sales.index')}}">Ventas</a></li>                
                
              </ul>
            </div>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-chart-pie menu-icon"></i>
              <span class="menu-title">Empresa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('business.index')}}">Configuracion</a></li>
               
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="fas fa-table menu-icon"></i>
              <span class="menu-title">Reportes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('reports.day')}}">Reportes dias</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('reports.date')}}">Reportes mes</a></li>
                
              </ul>
            </div>
          </li>
          
        
        </ul>
      </nav>