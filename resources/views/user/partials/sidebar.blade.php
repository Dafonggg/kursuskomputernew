<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('home') }}" class="app-brand-link">
      <span class="app-brand-logo demo me-1">
        <img src="{{ asset('images/logokrk.png') }}" alt="Logo" style="height: 50px; width: auto;">
      </span>
      <span class="app-brand-text demo menu-text fw-semibold ms-2">Kursus Ryan Komputer</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto" onclick="Helpers.toggleCollapsed()">
      <i class="menu-toggle-icon d-xl-inline-block align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Materi Kursus -->
    <li class="menu-item {{ request()->routeIs('dashboard.materi*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.materi-kursus') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-file-text-line"></i>
        <div data-i18n="Materi Kursus">Materi Kursus</div>
      </a>
    </li>

    <!-- Jadwal Kursus -->
    <li class="menu-item {{ request()->routeIs('dashboard.jadwal*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.jadwal-kursus') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-calendar-line"></i>
        <div data-i18n="Jadwal Kursus">Jadwal Kursus</div>
      </a>
    </li>

    <!-- Chat -->
    <li class="menu-item {{ request()->routeIs('dashboard.chat*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.chat') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-wechat-line"></i>
        <div data-i18n="Chat">Chat</div>
      </a>
    </li>
  </ul>
</aside>
<!-- / Menu -->

