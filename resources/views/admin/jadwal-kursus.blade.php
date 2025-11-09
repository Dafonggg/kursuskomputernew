@extends('layouts.admin')

@section('title', 'Jadwal Kursus | Sistem Kursus Komputer')

@section('content')
<h4 class="fw-bold mb-4">
  <span class="text-muted fw-light">Jadwal /</span> Jadwal Kursus
</h4>

<!-- Jadwal Kursus Table -->
<div class="card">
  <div class="card-header d-flex flex-wrap justify-content-between gap-3">
    <div class="card-title mb-0 me-1">
      <h5 class="mb-1">Daftar Jadwal Kursus</h5>
      <p class="text-body-secondary mb-0">Kelola jadwal kursus dan sesi pembelajaran</p>
    </div>
    <div class="d-flex gap-3 align-items-center">
      <div class="d-flex align-items-center">
        <input
          type="text"
          class="form-control"
          placeholder="Cari jadwal..."
          id="searchInput" />
      </div>
      <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#modalTambahJadwal">
        <i class="icon-base ri ri-add-line me-2"></i>
        Tambah Jadwal
      </button>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kursus</th>
            <th>Pengajar</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Tipe Kursus</th>
            <th>Peserta</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3">
                  <div class="avatar-initial bg-label-primary rounded">
                    <i class="icon-base ri ri-computer-line"></i>
                  </div>
                </div>
                <div>
                  <h6 class="mb-0">Web Development</h6>
                  <small class="text-body-secondary">HTML, CSS, JavaScript</small>
                </div>
              </div>
            </td>
            <td>Budi Santoso</td>
            <td>15 Feb 2024</td>
            <td>09:00 - 11:00 WIB</td>
            <td>Lab A1</td>
            <td>15</td>
            <td>
              <span class="badge bg-label-success">Aktif</span>
            </td>
            <td>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditJadwal">
                  <i class="icon-base ri ri-pencil-line"></i>
                </button>
                <button class="btn btn-sm btn-label-danger" onclick="confirmDelete()">
                  <i class="icon-base ri ri-delete-bin-line"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3">
                  <div class="avatar-initial bg-label-info rounded">
                    <i class="icon-base ri ri-code-s-slash-line"></i>
                  </div>
                </div>
                <div>
                  <h6 class="mb-0">Python Programming</h6>
                  <small class="text-body-secondary">Dasar hingga Lanjutan</small>
                </div>
              </div>
            </td>
            <td>Siti Nurhaliza</td>
            <td>15 Feb 2024</td>
            <td>13:00 - 15:00 WIB</td>
            <td>Lab B2</td>
            <td>20</td>
            <td>
              <span class="badge bg-label-success">Aktif</span>
            </td>
            <td>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditJadwal">
                  <i class="icon-base ri ri-pencil-line"></i>
                </button>
                <button class="btn btn-sm btn-label-danger" onclick="confirmDelete()">
                  <i class="icon-base ri ri-delete-bin-line"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3">
                  <div class="avatar-initial bg-label-secondary rounded">
                    <i class="icon-base ri ri-database-2-line"></i>
                  </div>
                </div>
                <div>
                  <h6 class="mb-0">Database Management</h6>
                  <small class="text-body-secondary">MySQL & MongoDB</small>
                </div>
              </div>
            </td>
            <td>Ahmad Fauzi</td>
            <td>15 Feb 2024</td>
            <td>15:30 - 17:30 WIB</td>
            <td>Lab A2</td>
            <td>18</td>
            <td>
              <span class="badge bg-label-warning">Akan Datang</span>
            </td>
            <td>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditJadwal">
                  <i class="icon-base ri ri-pencil-line"></i>
                </button>
                <button class="btn btn-sm btn-label-danger" onclick="confirmDelete()">
                  <i class="icon-base ri ri-delete-bin-line"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3">
                  <div class="avatar-initial bg-label-success rounded">
                    <i class="icon-base ri ri-design-pen-rule-line"></i>
                  </div>
                </div>
                <div>
                  <h6 class="mb-0">UI/UX Design</h6>
                  <small class="text-body-secondary">Figma & Adobe XD</small>
                </div>
              </div>
            </td>
            <td>Dewi Sartika</td>
            <td>16 Feb 2024</td>
            <td>18:00 - 20:00 WIB</td>
            <td>Lab C1</td>
            <td>12</td>
            <td>
              <span class="badge bg-label-warning">Akan Datang</span>
            </td>
            <td>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditJadwal">
                  <i class="icon-base ri ri-pencil-line"></i>
                </button>
                <button class="btn btn-sm btn-label-danger" onclick="confirmDelete()">
                  <i class="icon-base ri ri-delete-bin-line"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-3">
                  <div class="avatar-initial bg-label-danger rounded">
                    <i class="icon-base ri ri-smartphone-line"></i>
                  </div>
                </div>
                <div>
                  <h6 class="mb-0">Mobile App Development</h6>
                  <small class="text-body-secondary">React Native & Flutter</small>
                </div>
              </div>
            </td>
            <td>Rizki Pratama</td>
            <td>16 Feb 2024</td>
            <td>19:00 - 21:00 WIB</td>
            <td>Lab B1</td>
            <td>14</td>
            <td>
              <span class="badge bg-label-warning">Akan Datang</span>
            </td>
            <td>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditJadwal">
                  <i class="icon-base ri ri-pencil-line"></i>
                </button>
                <button class="btn btn-sm btn-label-danger" onclick="confirmDelete()">
                  <i class="icon-base ri ri-delete-bin-line"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        <li class="page-item prev">
          <a class="page-link" href="javascript:void(0);"><i class="icon-base ri ri-arrow-left-s-line"></i></a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="javascript:void(0);">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0);">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0);">3</a>
        </li>
        <li class="page-item next">
          <a class="page-link" href="javascript:void(0);"><i class="icon-base ri ri-arrow-right-s-line"></i></a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!--/ Jadwal Kursus Table -->

<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="modalTambahJadwal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Jadwal Kursus</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formTambahJadwal">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="kursusJadwal" class="form-label">Kursus <span class="text-danger">*</span></label>
              <select class="form-select" id="kursusJadwal" required>
                <option value="">Pilih Kursus</option>
                <option value="web-dev">Web Development</option>
                <option value="python">Python Programming</option>
                <option value="database">Database Management</option>
                <option value="uiux">UI/UX Design</option>
                <option value="mobile">Mobile App Development</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="pengajar" class="form-label">Pengajar <span class="text-danger">*</span></label>
              <select class="form-select" id="pengajar" required>
                <option value="">Pilih Pengajar</option>
                <option value="budi">Budi Santoso</option>
                <option value="siti">Siti Nurhaliza</option>
                <option value="ahmad">Ahmad Fauzi</option>
                <option value="dewi">Dewi Sartika</option>
                <option value="rizki">Rizki Pratama</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
              <input type="date" class="form-control" id="tanggal" required />
            </div>
            <div class="col-md-3 mb-3">
              <label for="waktuMulai" class="form-label">Waktu Mulai <span class="text-danger">*</span></label>
              <input type="time" class="form-control" id="waktuMulai" required />
            </div>
            <div class="col-md-3 mb-3">
              <label for="waktuSelesai" class="form-label">Waktu Selesai <span class="text-danger">*</span></label>
              <input type="time" class="form-control" id="waktuSelesai" required />
            </div>
            <div class="col-md-6 mb-3">
              <label for="tipeKursus" class="form-label">Tipe Kursus <span class="text-danger">*</span></label>
              <select class="form-select" id="tipeKursus" required>
                <option value="">Pilih Tipe Kursus</option>
                <option value="offline">Offline</option>
                <option value="online">Online</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="statusJadwal" class="form-label">Status</label>
              <select class="form-select" id="statusJadwal">
                <option value="aktif" selected>Aktif</option>
                <option value="akan-datang">Akan Datang</option>
                <option value="selesai">Selesai</option>
                <option value="dibatalkan">Dibatalkan</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="button" class="btn btn-primary" onclick="simpanJadwal()">
          Simpan
        </button>
      </div>
    </div>
  </div>
</div>
<!--/ Modal Tambah Jadwal -->

<!-- Modal Edit Jadwal -->
<div class="modal fade" id="modalEditJadwal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Jadwal Kursus</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEditJadwal">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editKursusJadwal" class="form-label">Kursus <span class="text-danger">*</span></label>
              <select class="form-select" id="editKursusJadwal" required>
                <option value="web-dev" selected>Web Development</option>
                <option value="python">Python Programming</option>
                <option value="database">Database Management</option>
                <option value="uiux">UI/UX Design</option>
                <option value="mobile">Mobile App Development</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editPengajar" class="form-label">Pengajar <span class="text-danger">*</span></label>
              <select class="form-select" id="editPengajar" required>
                <option value="budi" selected>Budi Santoso</option>
                <option value="siti">Siti Nurhaliza</option>
                <option value="ahmad">Ahmad Fauzi</option>
                <option value="dewi">Dewi Sartika</option>
                <option value="rizki">Rizki Pratama</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editTanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
              <input type="date" class="form-control" id="editTanggal" value="2024-02-15" required />
            </div>
            <div class="col-md-3 mb-3">
              <label for="editWaktuMulai" class="form-label">Waktu Mulai <span class="text-danger">*</span></label>
              <input type="time" class="form-control" id="editWaktuMulai" value="09:00" required />
            </div>
            <div class="col-md-3 mb-3">
              <label for="editWaktuSelesai" class="form-label">Waktu Selesai <span class="text-danger">*</span></label>
              <input type="time" class="form-control" id="editWaktuSelesai" value="11:00" required />
            </div>
            <div class="col-md-6 mb-3">
              <label for="editTipeKursus" class="form-label">Tipe Kursus <span class="text-danger">*</span></label>
              <select class="form-select" id="editTipeKursus" required>
                <option value="offline" selected>Offline</option>
                <option value="online">Online</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editStatusJadwal" class="form-label">Status</label>
              <select class="form-select" id="editStatusJadwal">
                <option value="aktif" selected>Aktif</option>
                <option value="akan-datang">Akan Datang</option>
                <option value="selesai">Selesai</option>
                <option value="dibatalkan">Dibatalkan</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="button" class="btn btn-primary" onclick="updateJadwal()">
          Update
        </button>
      </div>
    </div>
  </div>
</div>
<!--/ Modal Edit Jadwal -->
@endsection

@push('scripts')
<script>
  function simpanJadwal() {
    alert('Jadwal berhasil ditambahkan!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalTambahJadwal'));
    modal.hide();
  }

  function updateJadwal() {
    alert('Jadwal berhasil diupdate!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditJadwal'));
    modal.hide();
  }

  function confirmDelete() {
    if (confirm('Apakah Anda yakin ingin menghapus jadwal ini?')) {
      alert('Jadwal berhasil dihapus!');
    }
  }

  document.getElementById('searchInput')?.addEventListener('keyup', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('table tbody tr');
    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
  });
</script>
@endpush
