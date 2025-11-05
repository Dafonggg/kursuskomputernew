@extends('layouts.admin')

@php
$useApexCharts = true;
$showGitHubButton = true;
@endphp

@section('title', 'Analisis Peserta | Sistem Kursus Komputer')

@section('content')
<h4 class="fw-bold mb-4">
  <span class="text-muted fw-light">Analisis /</span> Peserta
</h4>

<div class="row gy-6 mb-4">
  <!-- Analytics Cards -->
  <div class="col-md-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar">
            <div class="avatar-initial bg-primary rounded shadow-xs">
              <i class="icon-base ri ri-user-add-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Peserta Baru</p>
            <h4 class="mb-0">32</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              Bulan ini
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar">
            <div class="avatar-initial bg-success rounded shadow-xs">
              <i class="icon-base ri ri-checkbox-circle-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Penyelesaian Kursus</p>
            <h4 class="mb-0">186</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              76% dari total
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar">
            <div class="avatar-initial bg-info rounded shadow-xs">
              <i class="icon-base ri ri-star-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Rating Rata-rata</p>
            <h4 class="mb-0">4.8</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              Dari 245 ulasan
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar">
            <div class="avatar-initial bg-warning rounded shadow-xs">
              <i class="icon-base ri ri-time-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Retention Rate</p>
            <h4 class="mb-0">82%</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              Peserta aktif
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Analytics Cards -->

  <!-- Peserta Baru Per Minggu Chart -->
  <div class="col-xl-8 col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Peserta Baru Per Minggu</h5>
          <div class="dropdown">
            <button
              class="btn text-body-secondary p-0"
              type="button"
              id="weeklyOverviewDropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="newParticipantsChart" style="height: 300px;"></div>
      </div>
    </div>
  </div>
  <!--/ Peserta Baru Per Minggu Chart -->

  <!-- Kursus Populer -->
  <div class="col-xl-4 col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-1">Kursus Paling Populer</h5>
      </div>
      <div class="card-body">
        <div id="popularCoursesChart" style="height: 300px;"></div>
      </div>
    </div>
  </div>
  <!--/ Kursus Populer -->

  <!-- Penyelesaian Kursus -->
  <div class="col-xl-6 col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-1">Tingkat Penyelesaian Kursus</h5>
      </div>
      <div class="card-body">
        <div id="completionRateChart" style="height: 300px;"></div>
      </div>
    </div>
  </div>
  <!--/ Penyelesaian Kursus -->
</div>
@endsection

@push('scripts')
<script>
  // Analytics Charts
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof ApexCharts !== 'undefined') {
      // New Participants Chart
      const newParticipantsChart = new ApexCharts(document.querySelector("#newParticipantsChart"), {
        series: [{
          name: 'Peserta Baru',
          data: [12, 15, 8, 18, 22, 16, 25, 20, 19, 24, 28, 30]
        }],
        chart: {
          type: 'line',
          height: 300,
          toolbar: { show: false }
        },
        stroke: {
          curve: 'smooth',
          width: 3
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
        },
        colors: ['#2f4258'],
        markers: {
          size: 5
        }
      });
      newParticipantsChart.render();

      // Popular Courses Pie Chart
      const popularCoursesChart = new ApexCharts(document.querySelector("#popularCoursesChart"), {
        series: [45, 38, 28, 22, 15],
        chart: {
          type: 'pie',
          height: 300
        },
        labels: ['Web Dev', 'Python', 'Database', 'UI/UX', 'Mobile'],
        colors: ['#2f4258', '#696cff', '#8592a3', '#71dd37', '#ffab00'],
        legend: {
          position: 'bottom'
        }
      });
      popularCoursesChart.render();

      // Completion Rate Chart
      const completionRateChart = new ApexCharts(document.querySelector("#completionRateChart"), {
        series: [{
          name: 'Tingkat Penyelesaian',
          data: [85, 78, 92, 88, 75, 82, 90, 86, 79, 88, 91, 87]
        }],
        chart: {
          type: 'area',
          height: 300,
          toolbar: { show: false }
        },
        stroke: {
          curve: 'smooth',
          width: 2
        },
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.3
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
        },
        colors: ['#2f4258'],
        yaxis: {
          max: 100,
          labels: {
            formatter: function(val) {
              return val + '%';
            }
          }
        }
      });
      completionRateChart.render();
    }
  });
</script>
@endpush
