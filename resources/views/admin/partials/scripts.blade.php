@if(isset($useBuildComment) && $useBuildComment)
<!-- Core JS -->
@endif

<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/helpers.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

@if(isset($useBuildComment) && $useBuildComment)
<!-- endbuild -->
@endif

@if(isset($useApexCharts) && $useApexCharts)
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endif

@if(isset($pageScriptFile))
<!-- Page JS -->
<script src="{{ asset($pageScriptFile) }}"></script>
@endif

@if(isset($pageScript))
{!! $pageScript !!}
@endif

@if(isset($showGitHubButton) && $showGitHubButton)
<!-- Place this tag before closing body tag for github widget button. -->
<script async="async" defer="defer" src="https://buttons.github.io/buttons.js"></script>
@endif