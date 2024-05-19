<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="{{'admin/home' == request()->path() ? 'nav-item active' : 'nav-item'}}">
            <a class="nav-link" href="{{ url('home') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="{{'/admin/pesan/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
            <a class="nav-link" data-bs-toggle="collapsed" href="{{ route('pesan.view') }}">
                <i class="mdi mdi-package-down menu-icon"></i>
                <span class="menu-title">Pesan Kendaraan</span>
            </a>
        </li>
        <li class="{{'/admin/pengemudi/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
            <a class="nav-link" data-bs-toggle="collapsed" href="{{ route('pengemudi.view') }}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Pengemudi</span>
            </a>
        </li>
        <li class="{{'/admin/kendaraan/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
            <a class="nav-link" data-bs-toggle="collapsed" href="">
                <i class="mdi mdi-car menu-icon"></i>
                <span class="menu-title">Kendaraan</span>
                <i class="menu-arrow"></i>
            </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ route('kendaraan.view') }}">Data Kendaraan</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('service.view') }}">Service Kendaraan</a></li>
                </ul>
              </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" aria-expanded="false" aria-controls="form-elements">
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Log Out</span>
            </a>
        </li>
        </li>
    </ul>
</nav>