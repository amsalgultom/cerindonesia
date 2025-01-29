  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'admin-dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'banner') ? '' : 'collapsed' }}" href="{{ route('banner.index') }}">
          <i class="bi bi-grid"></i>
          <span>Banner</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'team') ? '' : 'collapsed' }}" href="{{ route('team.index') }}">
          <i class="bi bi-grid"></i>
          <span>Team</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'service') ? '' : 'collapsed' }}" href="{{ route('service.index') }}">
          <i class="bi bi-grid"></i>
          <span>Service</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'client') ? '' : 'collapsed' }}" href="{{ route('client.index') }}">
          <i class="bi bi-grid"></i>
          <span>Client</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (request()->segment(2) == 'admin-general') ? '' : 'collapsed' }}" href="{{ route('general.index') }}">
          <i class="bi bi-gear"></i>
          <span>Setup General</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->