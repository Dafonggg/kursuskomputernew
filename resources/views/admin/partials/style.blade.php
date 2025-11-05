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