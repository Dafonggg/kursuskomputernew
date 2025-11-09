<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="{{ asset('assets/') }}"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />

    <title>@yield('title', 'Dashboard | Sistem Kursus Komputer')</title>

    <meta name="description" content="" />

    @php
    $useBuildComment = isset($useBuildComment) ? $useBuildComment : false;
    $useApexCharts = isset($useApexCharts) ? $useApexCharts : false;
    $showGitHubButton = isset($showGitHubButton) ? $showGitHubButton : false;
    @endphp
    
    @include('admin.partials.style')
    
    @stack('styles')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('user.partials.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
          @include('admin.partials.navbar', [
            'showGitHubButton' => $showGitHubButton ?? false,
            'showBilling' => $showBilling ?? false
          ])

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              @yield('content')
            </div>
            <!-- / Content -->

            @include('admin.partials.footer', [
              'showFooterLinks' => $showFooterLinks ?? false
            ])

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @if(isset($showBuyNow) && $showBuyNow)
    <div class="buy-now">
      <a
        href="https://themeselection.com/item/materio-dashboard-pro-bootstrap/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>
    @endif

    @include('admin.partials.scripts', [
      'useBuildComment' => $useBuildComment ?? false,
      'useApexCharts' => $useApexCharts ?? false,
      'showGitHubButton' => $showGitHubButton ?? false,
      'pageScriptFile' => $pageScriptFile ?? null,
      'pageScript' => $pageScript ?? null
    ])
    
    @stack('scripts')
  </body>
</html>

