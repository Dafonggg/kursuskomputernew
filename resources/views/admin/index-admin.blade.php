@extends('layouts.admin')

@php
$useBuildComment = true;
$useApexCharts = true;
$showGitHubButton = true;
$showBilling = true;
$showFooterLinks = true;
$pageScriptFile = 'assets/js/dashboards-analytics.js';
@endphp

@section('title', 'Dashboard | Sistem Kursus Komputer')

@section('content')
<div class="row gy-6">
  <!-- Summary Cards -->
  <div class="col-md-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar">
            <div class="avatar-initial bg-primary rounded shadow-xs">
              <i class="icon-base ri ri-user-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Total Peserta</p>
            <h4 class="mb-0">245</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              12.5% vs minggu lalu
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
              <i class="icon-base ri ri-book-open-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Kursus Aktif</p>
            <h4 class="mb-0">18</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              3 kursus baru
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
              <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Total Pendapatan</p>
            <h4 class="mb-0">Rp 125.8jt</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              18.2% vs bulan lalu
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
              <i class="icon-base ri ri-line-chart-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Pertumbuhan</p>
            <h4 class="mb-0">+24.5%</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              Minggu ini
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Summary Cards -->

  <!-- Peserta Per Minggu Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Peserta Per Minggu</h5>
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
      <div class="card-body pt-lg-2">
        <div id="weeklyOverviewChart"></div>
        <div class="mt-1 mt-md-3">
          <div class="d-flex align-items-center gap-4">
            <h4 class="mb-0">45%</h4>
            <p class="mb-0">Peningkatan peserta 45% 😎 dibandingkan bulan lalu</p>
          </div>
          <div class="d-grid mt-3 mt-md-4">
            <a href="{{ route('dashboard.analisis-peserta') }}" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Peserta Per Minggu Chart -->

  <!-- Pendapatan Per Kursus -->
  <div class="col-xl-4 col-md-6">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Pendapatan Per Kursus</h5>
        <div class="dropdown">
          <button
            class="btn text-body-secondary p-0"
            type="button"
            id="totalEarnings"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
            <a class="dropdown-item" href="javascript:void(0);">28 Hari Terakhir</a>
            <a class="dropdown-item" href="javascript:void(0);">Bulan Lalu</a>
            <a class="dropdown-item" href="javascript:void(0);">Tahun Lalu</a>
          </div>
        </div>
      </div>
      <div class="card-body pt-lg-8">
        <div class="mb-5 mb-lg-12">
          <div class="d-flex align-items-center">
            <h3 class="mb-0">Rp 24.8jt</h3>
            <span class="text-success ms-2">
              <i class="icon-base ri ri-arrow-up-s-line icon-sm"></i>
              <span>10%</span>
            </span>
          </div>
          <p class="mb-0">Dibandingkan Rp 84.3jt tahun lalu</p>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
              <div class="avatar-initial bg-primary rounded">
                <i class="icon-base ri ri-computer-line"></i>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Web Development</h6>
                <p class="mb-0">HTML, CSS, JavaScript</p>
              </div>
              <div>
                <h6 class="mb-2">Rp 24.8jt</h6>
                <div class="progress bg-label-primary" style="height: 4px">
                  <div
                    class="progress-bar bg-primary"
                    style="width: 75%"
                    role="progressbar"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
              <div class="avatar-initial bg-info rounded">
                <i class="icon-base ri ri-code-s-slash-line"></i>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Python Programming</h6>
                <p class="mb-0">Dasar hingga Lanjutan</p>
              </div>
              <div>
                <h6 class="mb-2">Rp 18.6jt</h6>
                <div class="progress bg-label-info" style="height: 4px">
                  <div
                    class="progress-bar bg-info"
                    style="width: 60%"
                    role="progressbar"
                    aria-valuenow="60"
                    aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
              <div class="avatar-initial bg-secondary rounded">
                <i class="icon-base ri ri-database-2-line"></i>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Database Management</h6>
                <p class="mb-0">MySQL & MongoDB</p>
              </div>
              <div>
                <h6 class="mb-2">Rp 12.4jt</h6>
                <div class="progress bg-label-secondary" style="height: 4px">
                  <div
                    class="progress-bar bg-secondary"
                    style="width: 45%"
                    role="progressbar"
                    aria-valuenow="45"
                    aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Pendapatan Per Kursus -->

  <!-- KPI Cards -->
  <div class="col-xl-4 col-md-6">
    <div class="row gy-6">
      <!-- Total Pendapatan line chart -->
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h4 class="mb-0">Rp 86.4jt</h4>
          </div>
          <div class="card-body">
            <div id="totalProfitLineChart" class="mb-3"></div>
            <h6 class="text-center mb-0">Total Pendapatan</h6>
          </div>
        </div>
      </div>
      <!--/ Total Pendapatan line chart -->
      <!-- Pendapatan Mingguan -->
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="avatar">
              <div class="avatar-initial bg-secondary rounded-circle shadow-xs">
                <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
              </div>
            </div>
            <div class="dropdown">
              <button
                class="btn text-body-secondary p-0"
                type="button"
                id="totalProfitID"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-1">Pendapatan Mingguan</h6>
            <div class="d-flex flex-wrap mb-1 align-items-center">
              <h4 class="mb-0 me-2">Rp 25.6jt</h4>
              <p class="text-success mb-0">+42%</p>
            </div>
            <small>Minggu ini</small>
          </div>
        </div>
      </div>
      <!--/ Pendapatan Mingguan -->
      <!-- Kursus Baru -->
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="avatar">
              <div class="avatar-initial bg-primary rounded-circle shadow-xs">
                <i class="icon-base ri ri-book-open-line icon-24px"></i>
              </div>
            </div>
            <div class="dropdown">
              <button
                class="btn text-body-secondary p-0"
                type="button"
                id="newProjectID"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-1">Kursus Baru</h6>
            <div class="d-flex flex-wrap mb-1 align-items-center">
              <h4 class="mb-0 me-2">12</h4>
              <p class="text-success mb-0">+3</p>
            </div>
            <small>Tahun ini</small>
          </div>
        </div>
      </div>
      <!--/ Kursus Baru -->
      <!-- Sesi Aktif -->
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h4 class="mb-0">86</h4>
          </div>
          <div class="card-body">
            <div id="sessionsColumnChart" class="mb-3"></div>
            <h6 class="text-center mb-0">Sesi Aktif</h6>
          </div>
        </div>
      </div>
      <!--/ Sesi Aktif -->
    </div>
  </div>
  <!--/ KPI Cards -->

  <!-- Jadwal Hari Ini -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Jadwal Hari Ini</h5>
        <a href="{{ route('dashboard.jadwal-kursus') }}" class="btn btn-sm btn-primary">Lihat Semua</a>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-3">
              <div class="avatar-initial bg-label-primary rounded-circle">
                <i class="icon-base ri ri-computer-line"></i>
              </div>
            </div>
            <div>
              <h6 class="mb-0">Web Development</h6>
              <p class="mb-0 small">09:00 - 11:00 WIB</p>
            </div>
          </div>
          <span class="badge bg-label-success">Aktif</span>
        </div>
        <div class="d-flex justify-content-between mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-3">
              <div class="avatar-initial bg-label-info rounded-circle">
                <i class="icon-base ri ri-code-s-slash-line"></i>
              </div>
            </div>
            <div>
              <h6 class="mb-0">Python Programming</h6>
              <p class="mb-0 small">13:00 - 15:00 WIB</p>
            </div>
          </div>
          <span class="badge bg-label-warning">Akan Datang</span>
        </div>
        <div class="d-flex justify-content-between mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-3">
              <div class="avatar-initial bg-label-secondary rounded-circle">
                <i class="icon-base ri ri-database-2-line"></i>
              </div>
            </div>
            <div>
              <h6 class="mb-0">Database Management</h6>
              <p class="mb-0 small">15:30 - 17:30 WIB</p>
            </div>
          </div>
          <span class="badge bg-label-warning">Akan Datang</span>
        </div>
        <div class="d-flex justify-content-between mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-3">
              <div class="avatar-initial bg-label-success rounded-circle">
                <i class="icon-base ri ri-design-pen-rule-line"></i>
              </div>
            </div>
            <div>
              <h6 class="mb-0">UI/UX Design</h6>
              <p class="mb-0 small">18:00 - 20:00 WIB</p>
            </div>
          </div>
          <span class="badge bg-label-warning">Akan Datang</span>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center">
            <div class="avatar me-3">
              <div class="avatar-initial bg-label-danger rounded-circle">
                <i class="icon-base ri ri-smartphone-line"></i>
              </div>
            </div>
            <div>
              <h6 class="mb-0">Mobile App Dev</h6>
              <p class="mb-0 small">19:00 - 21:00 WIB</p>
            </div>
          </div>
          <span class="badge bg-label-warning">Akan Datang</span>
        </div>
      </div>
    </div>
  </div>
  <!--/ Jadwal Hari Ini -->

  <!-- Jadwal Kursus Hari Ini Table -->
  <div class="col-12">
    <div class="card overflow-hidden">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0">Jadwal Kursus Hari Ini</h5>
        <a href="{{ route('dashboard.jadwal-kursus') }}" class="btn btn-sm btn-primary">Lihat Semua Jadwal</a>
      </div>
      <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th class="text-truncate">Kursus</th>
              <th class="text-truncate">Pengajar</th>
              <th class="text-truncate">Waktu</th>
              <th class="text-truncate">Ruangan</th>
              <th class="text-truncate">Peserta</th>
              <th class="text-truncate">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <div class="avatar-initial bg-label-primary rounded">
                      <i class="icon-base ri ri-computer-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate">Web Development</h6>
                    <small class="text-truncate text-body-secondary">HTML, CSS, JavaScript</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">Budi Santoso</td>
              <td class="text-truncate">09:00 - 11:00 WIB</td>
              <td class="text-truncate">Lab A1</td>
              <td class="text-truncate">15</td>
              <td><span class="badge bg-label-success rounded-pill">Berlangsung</span></td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <div class="avatar-initial bg-label-info rounded">
                      <i class="icon-base ri ri-code-s-slash-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate">Python Programming</h6>
                    <small class="text-truncate text-body-secondary">Dasar hingga Lanjutan</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">Siti Nurhaliza</td>
              <td class="text-truncate">13:00 - 15:00 WIB</td>
              <td class="text-truncate">Lab B2</td>
              <td class="text-truncate">20</td>
              <td><span class="badge bg-label-warning rounded-pill">Akan Datang</span></td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <div class="avatar-initial bg-label-secondary rounded">
                      <i class="icon-base ri ri-database-2-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate">Database Management</h6>
                    <small class="text-truncate text-body-secondary">MySQL & MongoDB</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">Ahmad Fauzi</td>
              <td class="text-truncate">15:30 - 17:30 WIB</td>
              <td class="text-truncate">Lab A2</td>
              <td class="text-truncate">18</td>
              <td><span class="badge bg-label-warning rounded-pill">Akan Datang</span></td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <div class="avatar-initial bg-label-success rounded">
                      <i class="icon-base ri ri-design-pen-rule-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate">UI/UX Design</h6>
                    <small class="text-truncate text-body-secondary">Figma & Adobe XD</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">Dewi Sartika</td>
              <td class="text-truncate">18:00 - 20:00 WIB</td>
              <td class="text-truncate">Lab C1</td>
              <td class="text-truncate">12</td>
              <td><span class="badge bg-label-warning rounded-pill">Akan Datang</span></td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <div class="avatar-initial bg-label-danger rounded">
                      <i class="icon-base ri ri-smartphone-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate">Mobile App Development</h6>
                    <small class="text-truncate text-body-secondary">React Native & Flutter</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">Rizki Pratama</td>
              <td class="text-truncate">19:00 - 21:00 WIB</td>
              <td class="text-truncate">Lab B1</td>
              <td class="text-truncate">14</td>
              <td><span class="badge bg-label-warning rounded-pill">Akan Datang</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Jadwal Kursus Hari Ini Table -->
</div>
@endsection
