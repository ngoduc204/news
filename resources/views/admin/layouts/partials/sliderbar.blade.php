<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link text-center">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <img src="/assets/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <div class="info">
          <a href="#" class="d-block">Duck ngo</a>
        </div>
      </div>
  
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                TRang chủ
              </p>
            </a>
          </li>
  
          
  
          <li class="nav-item">
            <a href="{{route('categories.index')}}" class="nav-link">
            <i class="fas fa-folder"></i>
  
              <p>
                Danh mục
              </p>
            </a>
          </li>
  
          <li class="nav-item">
            <a href="{{route('news.index')}}" class="nav-link">
            <i class="fas fa-box"></i>
  
  
              <p>
                Tin tức
              </p>
            </a>
          </li>
  
         
  
          
  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Tài khoản
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.users.admins.index') }}" class="nav-link">

                    <i class="nav-icon far fa-user"></i>
                    <p>Tài khoản quản trị</p>
                  </a>
                </li>
  
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>Tài khoản Khách hàng</p>
                  </a>
                </li>
  
                <li class="nav-item">
                  <a href="{{ route('admin.users.myadmin.edit', ['id' => Auth::id()]) }}" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>Tài khoản cá nhân</p>
                </a>
                </li>
              </ul>
            
          </li>
  
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>