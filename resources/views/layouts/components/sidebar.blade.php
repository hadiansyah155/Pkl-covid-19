<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/corona.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kawal Corona</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
               <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="fas fa-globe-americas nav-icon"></i>
              <p>
                Global
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('negara.index')}}" class="nav-link">
                  <i class="fas fa-globe-americas nav-icon"></i>
                  <p>Negara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Kasus</p>
                </a>
              </li>
              
            </ul>
          </li>
          
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="fas fa-globe-americas nav-icon"></i>
              <p>
                Indonesia
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('provinsi.index')}}"class="nav-link">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>Provinsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kota.index')}}" class="nav-link">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>Kota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kecamatan.index')}}" class="nav-link">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kelurahan.index')}}" class="nav-link">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>Kelurahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rw.index')}}" class="nav-link">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>RW</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tracking.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Tracking</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="nav-link">  <i class="fas fa-unlock alt nav-icon"></i>Logout
                  </a>
                </a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                  </form>
            </ul>
          </li>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>