  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('panal/img//user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $auth->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-book"></i> <span>Settings</span></a></li>
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-book"></i> <span>Contacts</span></a></li>

        
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Show</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Show</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Show</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Show</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
