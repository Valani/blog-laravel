  <!-- main sidebar container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
               Categories 
              </p>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
               <i class="nav-icon fas fa-tags"></i>
              <p>
               Tags 
              </p>
            </a>
          </li>
        </ul>
    </div>

  </aside>
