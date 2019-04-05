<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="{{url('/')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-fw fa-folder"></i>
    <span>Pages</span>
  </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">CRUD Worship Info</h6>
          <a class="dropdown-item" href="{{url('worshipinfo')}}">Worship Info</a>
          <a class="dropdown-item" href="{{url('addwinfo')}}">Add</a>
          {{-- <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a> --}}
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">CRUD Worship Verses</h6>
          <a class="dropdown-item" href="{{url('worshipverses')}}">Worship Verses</a>
          <a class="dropdown-item" href="{{url('addwverse')}}">Add</a>
          {{-- <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a> --}}
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> --}}
</ul>