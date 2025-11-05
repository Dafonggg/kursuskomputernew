@extends('layouts.admin')

@php
$useBuildComment = true;
$useApexCharts = true;
$showGitHubButton = true;
$showBilling = true;
$showFooterLinks = true;
@endphp

@section('title', 'Laporan Keuangan | Sistem Kursus Komputer')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold mb-0">
    <span class="text-muted fw-light">Laporan /</span> Keuangan
  </h4>
  <div class="d-flex gap-2">
    <input type="month" class="form-control" id="filterMonth" value="2024-02" />
    <button class="btn btn-primary" onclick="exportReport()">
      <i class="icon-base ri ri-download-line me-2"></i>
      Export
    </button>
  </div>
</div>

<div class="row gy-6 mb-4">
  <!-- Financial Summary Cards -->
  <div class="col-md-6 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar">
            <div class="avatar-initial bg-success rounded shadow-xs">
              <i class="icon-base ri ri-arrow-down-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Total Pemasukan</p>
            <h4 class="mb-0">Rp 45.8jt</h4>
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
            <div class="avatar-initial bg-danger rounded shadow-xs">
              <i class="icon-base ri ri-arrow-up-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Total Pengeluaran</p>
            <h4 class="mb-0">Rp 12.5jt</h4>
            <small class="text-danger">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              5.3% vs bulan lalu
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
            <div class="avatar-initial bg-primary rounded shadow-xs">
              <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Laba Bersih</p>
            <h4 class="mb-0">Rp 33.3jt</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              24.5% vs bulan lalu
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
              <i class="icon-base ri ri-file-list-3-line icon-24px"></i>
            </div>
          </div>
          <div class="ms-3">
            <p class="mb-0 text-body-secondary">Transaksi</p>
            <h4 class="mb-0">156</h4>
            <small class="text-success">
              <i class="icon-base ri ri-arrow-up-s-line"></i>
              32 transaksi bulan ini
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Financial Summary Cards -->

  <!-- Pendapatan Bulanan Chart -->
  <div class="col-xl-8 col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Pendapatan Bulanan</h5>
          <div class="dropdown">
            <button
              class="btn text-body-secondary p-0"
              type="button"
              id="monthlyRevenueDropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="monthlyRevenueDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Export</a>
              <a class="dropdown-item" href="javascript:void(0);">Print</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="monthlyRevenueChart" style="height: 300px;"></div>
      </div>
    </div>
  </div>
  <!--/ Pendapatan Bulanan Chart -->

  <!-- Pendapatan Per Kursus -->
  <div class="col-xl-4 col-md-12">
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

  <!-- Transaksi Keuangan Table -->
  <div class="col-12">
    <div class="card overflow-hidden">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0">Riwayat Transaksi Keuangan</h5>
        <div class="d-flex gap-2">
          <input type="text" class="form-control form-control-sm" placeholder="Cari..." id="searchTransaction" />
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Sumber</th>
              <th>Keterangan</th>
              <th>Jenis</th>
              <th class="text-end">Jumlah</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>15 Feb 2024</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <div class="avatar-initial bg-label-primary rounded">
                      <i class="icon-base ri ri-user-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0">Pembayaran Kursus</h6>
                    <small class="text-body-secondary">Ahmad Fauzi</small>
                  </div>
                </div>
              </td>
              <td>Web Development - Pembayaran Penuh</td>
              <td><span class="badge bg-label-success">Pemasukan</span></td>
              <td class="text-end text-success fw-bold">+Rp 2.500.000</td>
              <td><span class="badge bg-label-success">Lunas</span></td>
            </tr>
            <tr>
              <td>14 Feb 2024</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <div class="avatar-initial bg-label-info rounded">
                      <i class="icon-base ri ri-user-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0">Pembayaran Kursus</h6>
                    <small class="text-body-secondary">Siti Nurhaliza</small>
                  </div>
                </div>
              </td>
              <td>Python Programming - DP</td>
              <td><span class="badge bg-label-success">Pemasukan</span></td>
              <td class="text-end text-success fw-bold">+Rp 1.500.000</td>
              <td><span class="badge bg-label-success">Lunas</span></td>
            </tr>
            <tr>
              <td>13 Feb 2024</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <div class="avatar-initial bg-label-warning rounded">
                      <i class="icon-base ri ri-shopping-bag-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0">Penjualan Produk</h6>
                    <small class="text-body-secondary">Buku Python</small>
                  </div>
                </div>
              </td>
              <td>Penjualan Produk</td>
              <td><span class="badge bg-label-success">Pemasukan</span></td>
              <td class="text-end text-success fw-bold">+Rp 150.000</td>
              <td><span class="badge bg-label-success">Lunas</span></td>
            </tr>
            <tr>
              <td>12 Feb 2024</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <div class="avatar-initial bg-label-danger rounded">
                      <i class="icon-base ri ri-building-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0">Operasional</h6>
                    <small class="text-body-secondary">Sewa Ruangan</small>
                  </div>
                </div>
              </td>
              <td>Biaya sewa ruangan Lab A1</td>
              <td><span class="badge bg-label-danger">Pengeluaran</span></td>
              <td class="text-end text-danger fw-bold">-Rp 5.000.000</td>
              <td><span class="badge bg-label-success">Terbayar</span></td>
            </tr>
            <tr>
              <td>11 Feb 2024</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <div class="avatar-initial bg-label-secondary rounded">
                      <i class="icon-base ri ri-user-line"></i>
                    </div>
                  </div>
                  <div>
                    <h6 class="mb-0">Pembayaran Kursus</h6>
                    <small class="text-body-secondary">Budi Santoso</small>
                  </div>
                </div>
              </td>
              <td>Database Management - Pembayaran Penuh</td>
              <td><span class="badge bg-label-success">Pemasukan</span></td>
              <td class="text-end text-success fw-bold">+Rp 2.200.000</td>
              <td><span class="badge bg-label-success">Lunas</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center mb-0">
            <li class="page-item prev">
              <a class="page-link" href="javascript:void(0);"><i class="icon-base ri ri-arrow-left-s-line"></i></a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">2</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="javascript:void(0);"><i class="icon-base ri ri-arrow-right-s-line"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!--/ Transaksi Keuangan Table -->
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof ApexCharts !== 'undefined') {
      const monthlyRevenueChart = new ApexCharts(document.querySelector("#monthlyRevenueChart"), {
        series: [{
          name: 'Pendapatan',
          data: [42000000, 38000000, 45000000, 48000000, 45800000, 52000000, 55000000, 49000000, 51000000, 54000000, 58000000, 62000000]
        }],
        chart: {
          type: 'bar',
          height: 300,
          toolbar: { show: false }
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: false,
            columnWidth: '55%'
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
        },
        yaxis: {
          labels: {
            formatter: function(val) {
              return 'Rp ' + (val / 1000000).toFixed(1) + 'jt';
            }
          }
        },
        colors: ['#2f4258'],
        fill: {
          opacity: 1
        }
      });
      monthlyRevenueChart.render();
    }
  });

  function exportReport() {
    alert('Laporan keuangan berhasil diekspor!');
  }
</script>
@endpush
