<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/profiles') }}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profiles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/forum')}}" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Forum
              </p>
            </a>
          </li>
        </ul>
      </nav>