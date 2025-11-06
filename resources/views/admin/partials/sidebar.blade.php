<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('dashboard.admin-dashboard') }}" class="app-brand-link">
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
    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('dashboard.admin-dashboard') ? 'active' : '' }}">
      <a href="{{ route('dashboard.admin-dashboard') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-home-smile-line"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>

    <!-- Peserta Kursus -->
    <li class="menu-item {{ request()->routeIs('dashboard.peserta*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.peserta-kursus') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-user-line"></i>
        <div data-i18n="Peserta Kursus">Peserta Kursus</div>
      </a>
    </li>

    <!-- Jadwal Kursus -->
    <li class="menu-item {{ request()->routeIs('dashboard.jadwal*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.jadwal-kursus') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-calendar-line"></i>
        <div data-i18n="Jadwal Kursus">Jadwal Kursus</div>
      </a>
    </li>

    <!-- Kursus -->
    <li class="menu-item {{ request()->routeIs('dashboard.kursus*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.kursus') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-book-open-line"></i>
        <div data-i18n="Kursus">Kursus</div>
      </a>
    </li>

    <!-- Materi Kursus -->
    <li class="menu-item {{ request()->routeIs('dashboard.materi*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.materi-kursus') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-file-text-line"></i>
        <div data-i18n="Materi Kursus">Materi Kursus</div>
      </a>
    </li>

    <!-- Katalog Produk -->
    <li class="menu-item {{ request()->routeIs('dashboard.katalog*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.katalog-produk') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-shopping-bag-line"></i>
        <div data-i18n="Katalog Produk">Katalog Produk</div>
      </a>
    </li>

    <!-- Laporan Keuangan -->
    <li class="menu-item {{ request()->routeIs('dashboard.laporan*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.laporan-keuangan') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-money-dollar-circle-line"></i>
        <div data-i18n="Laporan Keuangan">Laporan Keuangan</div>
      </a>
    </li>

    <!-- Analisis Peserta -->
    <li class="menu-item {{ request()->routeIs('dashboard.analisis*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.analisis-peserta') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-bar-chart-line"></i>
        <div data-i18n="Analisis Peserta">Analisis Peserta</div>
      </a>
    </li>

    <!-- Chat -->
    <li class="menu-item {{ request()->routeIs('dashboard.chat*') ? 'active' : '' }}">
      <a href="{{ route('dashboard.chat') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-wechat-line"></i>
        <div data-i18n="Chat">Chat</div>
      </a>
    </li>

    <!-- Settings -->
    <li class="menu-header mt-7">
      <span class="menu-header-text">Pengaturan</span>
    </li>
    <li class="menu-item {{ request()->routeIs('dashboard.account-sistem') ? 'active' : '' }}">
      <a href="{{ route('dashboard.account-sistem') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-user-line"></i>
        <div data-i18n="Profile">Profile</div>
      </a>
    </li>
    <li class="menu-item {{ request()->routeIs('dashboard.notifications-sistem') ? 'active' : '' }}">
      <a href="{{ route('dashboard.notifications-sistem') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-notification-line"></i>
        <div data-i18n="Notifications">Notifications</div>
      </a>
    </li>
    <li class="menu-item {{ request()->routeIs('dashboard.connections-sistem') ? 'active' : '' }}">
      <a href="{{ route('dashboard.connections-sistem') }}" class="menu-link">
        <i class="menu-icon icon-base ri ri-settings-4-line"></i>
        <div data-i18n="Settings">Settings</div>
      </a>
    </li>
  </ul>
</aside>
<!-- / Menu -->

