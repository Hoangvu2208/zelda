<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      
      <span class="brand-text font-weight-bold center">CBC-Zelda/ Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/avatar.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin.dashboard')}}" class="d-block">Hoang Vu</a>||
          <a href="{{route('admin.logout')}}"><small>LogOut</small></a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-home"></i>
              <p>
                 Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/posts/list" class="nav-link">
                  <i class="fas fa-newspaper"></i>
                  <p>Posts</p>
                </a> 
              </li>
              <li class="nav-item">
                <a href="/admin/users/list" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Users</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="{{route('category.list')}}" class="nav-link">
                  <i class="fas fa-object-group"></i> 
                  <p>Categories</p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="/admin/products/list" class="nav-link">
                  <i class="fab fa-opencart"></i>
                  <p>Products</p>
                </a>
              
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-invoice"></i>
                  <p>Orders</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.order.list')}}" class="nav-link">
                      <i class="far fa-check-square"></i>
                      <p>Orders List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.order.checked')}}" class="nav-link">
                      <i class="far fa-list-alt"></i>
                      <p>Checked Orders</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-envelope-open"></i>
                  <p>Mails</p>
                </a>
                <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                    <a href="{{route('mail')}}" class="nav-link">
                      <i class="far fa-list-alt"></i>
                      <p>Mails List</p>
                    </a>
                  </li>
                </ul>
              </li>
                           
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>