<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
  rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

<!-- Core CSS -->
@if(isset($useBuildComment) && $useBuildComment)
<!-- build:css assets/vendor/css/theme.css -->
@endif

<link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

@if(isset($useBuildComment) && $useBuildComment)
<!-- endbuild -->
@endif

@if(isset($useApexCharts) && $useApexCharts)
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endif

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
@if(isset($useBuildComment) && $useBuildComment)
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
@endif

<!--? Config: Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file. -->
<script src="{{ asset('assets/js/config.js') }}"></script>

<!-- Custom CSS untuk tema toska-biru (#81d0c7 dan #4f98a4) -->
<style>
  /* ============================================================
     Tema Admin Dashboard - Toska-Biru
     Primary: #81d0c7 (toska terang)
     Secondary: #4f98a4 (toska-biru gelap)
     ============================================================ */

  /* Override Bootstrap CSS Variables */
  :root {
    --bs-primary: #81d0c7 !important;
    --bs-secondary: #4f98a4 !important;
    --bs-primary-rgb: 129, 208, 199 !important;
    --bs-secondary-rgb: 79, 152, 164 !important;
    --bs-primary-text-emphasis: #2d4a4f !important;
    --bs-secondary-text-emphasis: #1f3d42 !important;
    --bs-primary-bg-subtle: #e6f5f3 !important;
    --bs-secondary-bg-subtle: #d4e8eb !important;
    --bs-primary-border-subtle: #b3e0d9 !important;
    --bs-secondary-border-subtle: #a8d4da !important;
    
    /* Custom theme colors */
    --theme-primary: #81d0c7;
    --theme-secondary: #4f98a4;
    --theme-primary-hover: #6bb8ae;
    --theme-secondary-hover: #3f7a85;
    --theme-primary-light: #e6f5f3;
    --theme-secondary-light: #d4e8eb;
  }

  /* ============================================================
     Sidebar Styling
     ============================================================ */
  
  /* Background sidebar */
  .layout-menu.menu-vertical {
    background-color: #ffffff !important;
  }

  /* Menu item aktif */
  .menu-item.active > .menu-link:not(.menu-toggle) {
    background: linear-gradient(270deg, var(--theme-secondary) 0%, var(--theme-primary) 100%) !important;
    color: #ffffff !important;
    box-shadow: 0 2px 4px rgba(79, 152, 164, 0.2) !important;
    border-radius: 0.375rem;
    margin: 0.25rem 0.5rem;
  }

  /* Hover state untuk menu item */
  .menu-item:not(.active) > .menu-link:hover {
    color: var(--theme-secondary) !important;
    background-color: var(--theme-primary-light) !important;
    border-radius: 0.375rem;
    margin: 0.25rem 0.5rem;
  }

  /* Icon color untuk menu aktif */
  .menu-item.active > .menu-link .menu-icon {
    color: #ffffff !important;
  }

  /* Text color untuk menu aktif */
  .menu-item.active > .menu-link div {
    color: #ffffff !important;
  }

  /* Menu header styling */
  .menu-header {
    color: var(--theme-secondary) !important;
    font-weight: 600;
  }

  /* App brand styling */
  .app-brand-link {
    color: var(--theme-secondary) !important;
  }

  /* ============================================================
     Navbar Styling
     ============================================================ */

  .bg-navbar-theme {
    background-color: #ffffff !important;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05) !important;
  }

  .navbar-nav .nav-link {
    color: #4a5568 !important;
  }

  .navbar-nav .nav-link:hover {
    color: var(--theme-secondary) !important;
  }

  /* Search input focus */
  .navbar-nav .form-control:focus {
    border-color: var(--theme-primary) !important;
    box-shadow: 0 0 0 0.2rem rgba(129, 208, 199, 0.25) !important;
  }

  /* ============================================================
     Buttons Styling
     ============================================================ */

  .btn-primary {
    background-color: var(--theme-primary) !important;
    border-color: var(--theme-primary) !important;
    color: #ffffff !important;
  }

  .btn-primary:hover,
  .btn-primary:focus {
    background-color: var(--theme-primary-hover) !important;
    border-color: var(--theme-primary-hover) !important;
    color: #ffffff !important;
    box-shadow: 0 2px 4px rgba(129, 208, 199, 0.3) !important;
  }

  .btn-primary:active {
    background-color: var(--theme-secondary) !important;
    border-color: var(--theme-secondary) !important;
  }

  .btn-secondary {
    background-color: var(--theme-secondary) !important;
    border-color: var(--theme-secondary) !important;
    color: #ffffff !important;
  }

  .btn-secondary:hover,
  .btn-secondary:focus {
    background-color: var(--theme-secondary-hover) !important;
    border-color: var(--theme-secondary-hover) !important;
    color: #ffffff !important;
    box-shadow: 0 2px 4px rgba(79, 152, 164, 0.3) !important;
  }

  /* Label buttons */
  .btn-label-primary {
    color: var(--theme-primary) !important;
    background-color: var(--theme-primary-light) !important;
    border-color: var(--theme-primary-light) !important;
  }

  .btn-label-primary:hover {
    color: #ffffff !important;
    background-color: var(--theme-primary) !important;
    border-color: var(--theme-primary) !important;
  }

  /* ============================================================
     Badges Styling
     ============================================================ */

  .badge.bg-primary,
  .badge.bg-label-primary {
    background-color: var(--theme-primary-light) !important;
    color: var(--theme-secondary) !important;
  }

  .badge.bg-secondary,
  .badge.bg-label-secondary {
    background-color: var(--theme-secondary-light) !important;
    color: var(--theme-secondary) !important;
  }

  /* ============================================================
     Avatar & Icons Styling
     ============================================================ */

  .avatar-initial.bg-primary {
    background-color: var(--theme-primary) !important;
    color: #ffffff !important;
  }

  .avatar-initial.bg-secondary {
    background-color: var(--theme-secondary) !important;
    color: #ffffff !important;
  }

  .avatar-initial.bg-label-primary {
    background-color: var(--theme-primary-light) !important;
    color: var(--theme-secondary) !important;
  }

  .avatar-initial.bg-label-secondary {
    background-color: var(--theme-secondary-light) !important;
    color: var(--theme-secondary) !important;
  }

  /* ============================================================
     Progress Bars
     ============================================================ */

  .progress-bar.bg-primary {
    background-color: var(--theme-primary) !important;
  }

  .progress-bar.bg-secondary {
    background-color: var(--theme-secondary) !important;
  }

  .progress.bg-label-primary {
    background-color: var(--theme-primary-light) !important;
  }

  .progress.bg-label-secondary {
    background-color: var(--theme-secondary-light) !important;
  }

  /* ============================================================
     Cards & Tables
     ============================================================ */

  .card {
    border: 1px solid rgba(79, 152, 164, 0.1) !important;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05) !important;
  }

  .card-header {
    border-bottom: 1px solid rgba(79, 152, 164, 0.1) !important;
  }

  /* Table hover */
  .table tbody tr:hover {
    background-color: var(--theme-primary-light) !important;
  }

  /* ============================================================
     Pagination
     ============================================================ */

  .page-item.active .page-link {
    background-color: var(--theme-primary) !important;
    border-color: var(--theme-primary) !important;
    color: #ffffff !important;
  }

  .page-link {
    color: var(--theme-secondary) !important;
  }

  .page-link:hover {
    color: var(--theme-secondary-hover) !important;
    background-color: var(--theme-primary-light) !important;
  }

  /* ============================================================
     Forms & Inputs
     ============================================================ */

  .form-control:focus,
  .form-select:focus {
    border-color: var(--theme-primary) !important;
    box-shadow: 0 0 0 0.2rem rgba(129, 208, 199, 0.25) !important;
  }

  /* ============================================================
     Dropdown Menus
     ============================================================ */

  .dropdown-item:hover,
  .dropdown-item:focus {
    background-color: var(--theme-primary-light) !important;
    color: var(--theme-secondary) !important;
  }

  /* ============================================================
     Footer
     ============================================================ */

  .bg-footer-theme {
    background-color: #ffffff !important;
    border-top: 1px solid rgba(79, 152, 164, 0.1) !important;
  }

  .footer-link {
    color: var(--theme-secondary) !important;
  }

  .footer-link:hover {
    color: var(--theme-primary) !important;
  }

  /* ============================================================
     Modal
     ============================================================ */

  .modal-header {
    border-bottom: 1px solid rgba(79, 152, 164, 0.1) !important;
  }

  .modal-footer {
    border-top: 1px solid rgba(79, 152, 164, 0.1) !important;
  }

  /* ============================================================
     Summary Cards (Dashboard)
     ============================================================ */

  .avatar-initial.bg-success {
    background-color: var(--theme-primary) !important;
  }

  .avatar-initial.bg-info {
    background-color: var(--theme-secondary) !important;
  }

  /* ============================================================
     Responsive Adjustments
     ============================================================ */

  @media (max-width: 768px) {
    .menu-item.active > .menu-link:not(.menu-toggle),
    .menu-item:not(.active) > .menu-link:hover {
      margin: 0.125rem 0.25rem;
    }
  }
</style>