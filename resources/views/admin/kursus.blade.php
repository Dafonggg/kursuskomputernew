@extends('layouts.admin')

@section('title', 'Kursus | Sistem Kursus Komputer')

@section('content')
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold mb-0">
                  <span class="text-muted fw-light">Katalog /</span> Kursus
                </h4>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalTambahKursus">
                  <i class="icon-base ri ri-add-line me-2"></i>
                  Tambah Kursus
                </button>
              </div>

<!-- Kursus Cards -->
<div class="row g-4 mb-4">
  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img
        class="card-img-top"
        src="{{ asset('assets/img/elements/2.png') }}"
        alt="Web Development"
        style="height: 200px; object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="card-title mb-0">Web Development</h5>
          <span class="badge bg-label-success">Aktif</span>
        </div>
        <p class="card-text text-body-secondary">
          Pelajari HTML, CSS, JavaScript dari dasar hingga tingkat lanjutan. Bangun website modern dan responsive.
        </p>
        <div class="mb-3">
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-time-line me-2"></i>
            <small class="text-body-secondary">Durasi: 3 bulan</small>
          </div>
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-user-line me-2"></i>
            <small class="text-body-secondary">Peserta: 45</small>
          </div>
          <div class="d-flex align-items-center">
            <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
            <small class="text-body-secondary fw-bold">Rp 2.500.000</small>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditKursus">
            <i class="icon-base ri ri-pencil-line me-1"></i>
            Edit
          </button>
          <button class="btn btn-label-danger btn-sm" onclick="confirmDelete()">
            <i class="icon-base ri ri-delete-bin-line"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img
        class="card-img-top"
        src="{{ asset('assets/img/elements/5.png') }}"
        alt="Python Programming"
        style="height: 200px; object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="card-title mb-0">Python Programming</h5>
          <span class="badge bg-label-success">Aktif</span>
        </div>
        <p class="card-text text-body-secondary">
          Kuasai Python dari dasar hingga advanced. Belajar membuat aplikasi web, data science, dan automation.
        </p>
        <div class="mb-3">
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-time-line me-2"></i>
            <small class="text-body-secondary">Durasi: 4 bulan</small>
          </div>
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-user-line me-2"></i>
            <small class="text-body-secondary">Peserta: 38</small>
          </div>
          <div class="d-flex align-items-center">
            <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
            <small class="text-body-secondary fw-bold">Rp 3.000.000</small>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditKursus">
            <i class="icon-base ri ri-pencil-line me-1"></i>
            Edit
          </button>
          <button class="btn btn-label-danger btn-sm" onclick="confirmDelete()">
            <i class="icon-base ri ri-delete-bin-line"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img
        class="card-img-top"
        src="{{ asset('assets/img/elements/4.png') }}"
        alt="Database Management"
        style="height: 200px; object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="card-title mb-0">Database Management</h5>
          <span class="badge bg-label-success">Aktif</span>
        </div>
        <p class="card-text text-body-secondary">
          Pelajari MySQL, MongoDB, dan database management system lainnya. Optimasi query dan database design.
        </p>
        <div class="mb-3">
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-time-line me-2"></i>
            <small class="text-body-secondary">Durasi: 2.5 bulan</small>
          </div>
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-user-line me-2"></i>
            <small class="text-body-secondary">Peserta: 28</small>
          </div>
          <div class="d-flex align-items-center">
            <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
            <small class="text-body-secondary fw-bold">Rp 2.200.000</small>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditKursus">
            <i class="icon-base ri ri-pencil-line me-1"></i>
            Edit
          </button>
          <button class="btn btn-label-danger btn-sm" onclick="confirmDelete()">
            <i class="icon-base ri ri-delete-bin-line"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img
        class="card-img-top"
        src="{{ asset('assets/img/elements/7.png') }}"
        alt="UI/UX Design"
        style="height: 200px; object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="card-title mb-0">UI/UX Design</h5>
          <span class="badge bg-label-success">Aktif</span>
        </div>
        <p class="card-text text-body-secondary">
          Desain interface yang menarik dan user-friendly menggunakan Figma, Adobe XD, dan tools modern lainnya.
        </p>
        <div class="mb-3">
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-time-line me-2"></i>
            <small class="text-body-secondary">Durasi: 3 bulan</small>
          </div>
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-user-line me-2"></i>
            <small class="text-body-secondary">Peserta: 32</small>
          </div>
          <div class="d-flex align-items-center">
            <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
            <small class="text-body-secondary fw-bold">Rp 2.800.000</small>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditKursus">
            <i class="icon-base ri ri-pencil-line me-1"></i>
            Edit
          </button>
          <button class="btn btn-label-danger btn-sm" onclick="confirmDelete()">
            <i class="icon-base ri ri-delete-bin-line"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img
        class="card-img-top"
        src="{{ asset('assets/img/elements/1.png') }}"
        alt="Mobile App Development"
        style="height: 200px; object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="card-title mb-0">Mobile App Development</h5>
          <span class="badge bg-label-success">Aktif</span>
        </div>
        <p class="card-text text-body-secondary">
          Kembangkan aplikasi mobile untuk iOS dan Android menggunakan React Native dan Flutter.
        </p>
        <div class="mb-3">
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-time-line me-2"></i>
            <small class="text-body-secondary">Durasi: 4 bulan</small>
          </div>
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-user-line me-2"></i>
            <small class="text-body-secondary">Peserta: 24</small>
          </div>
          <div class="d-flex align-items-center">
            <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
            <small class="text-body-secondary fw-bold">Rp 3.500.000</small>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditKursus">
            <i class="icon-base ri ri-pencil-line me-1"></i>
            Edit
          </button>
          <button class="btn btn-label-danger btn-sm" onclick="confirmDelete()">
            <i class="icon-base ri ri-delete-bin-line"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img
        class="card-img-top"
        src="{{ asset('assets/img/elements/18.png') }}"
        alt="Data Science"
        style="height: 200px; object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="card-title mb-0">Data Science</h5>
          <span class="badge bg-label-warning">Nonaktif</span>
        </div>
        <p class="card-text text-body-secondary">
          Analisis data dengan Python, machine learning, dan visualisasi data menggunakan berbagai tools.
        </p>
        <div class="mb-3">
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-time-line me-2"></i>
            <small class="text-body-secondary">Durasi: 5 bulan</small>
          </div>
          <div class="d-flex align-items-center mb-1">
            <i class="icon-base ri ri-user-line me-2"></i>
            <small class="text-body-secondary">Peserta: 0</small>
          </div>
          <div class="d-flex align-items-center">
            <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
            <small class="text-body-secondary fw-bold">Rp 4.000.000</small>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditKursus">
            <i class="icon-base ri ri-pencil-line me-1"></i>
            Edit
          </button>
          <button class="btn btn-label-danger btn-sm" onclick="confirmDelete()">
            <i class="icon-base ri ri-delete-bin-line"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
              <!--/ Kursus Cards -->

              <!-- Pagination -->
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
              <!--/ Pagination -->

    <!-- Modal Tambah Kursus -->
    <div class="modal fade" id="modalTambahKursus" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Kursus</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formTambahKursus">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="namaKursus" class="form-label">Nama Kursus <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="namaKursus" placeholder="Contoh: Web Development" required />
                </div>
                <div class="col-12 mb-3">
                  <label for="deskripsiKursus" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="deskripsiKursus" rows="4" placeholder="Jelaskan tentang kursus ini..." required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="hargaKursus" class="form-label">Harga <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" id="hargaKursus" placeholder="2500000" required />
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="durasiKursus" class="form-label">Durasi</label>
                  <input type="text" class="form-control" id="durasiKursus" placeholder="Contoh: 3 bulan" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="gambarKursus" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="gambarKursus" accept="image/*" />
                  <small class="text-body-secondary">Format: JPG, PNG, Max 2MB</small>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="statusKursus" class="form-label">Status</label>
                  <select class="form-select" id="statusKursus">
                    <option value="aktif" selected>Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="simpanKursus()">
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal Tambah Kursus -->

    <!-- Modal Edit Kursus -->
    <div class="modal fade" id="modalEditKursus" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Kursus</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formEditKursus">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="editNamaKursus" class="form-label">Nama Kursus <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="editNamaKursus" value="Web Development" required />
                </div>
                <div class="col-12 mb-3">
                  <label for="editDeskripsiKursus" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="editDeskripsiKursus" rows="4" required>Pelajari HTML, CSS, JavaScript dari dasar hingga tingkat lanjutan. Bangun website modern dan responsive.</textarea>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editHargaKursus" class="form-label">Harga <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" id="editHargaKursus" value="2500000" required />
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editDurasiKursus" class="form-label">Durasi</label>
                  <input type="text" class="form-control" id="editDurasiKursus" value="3 bulan" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editGambarKursus" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="editGambarKursus" accept="image/*" />
                  <small class="text-body-secondary">Format: JPG, PNG, Max 2MB</small>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editStatusKursus" class="form-label">Status</label>
                  <select class="form-select" id="editStatusKursus">
                    <option value="aktif" selected>Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="updateKursus()">
              Update
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal Edit Kursus -->
@endsection

@push('scripts')
    <script>
      function simpanKursus() {
        alert('Kursus berhasil ditambahkan!');
        const modal = bootstrap.Modal.getInstance(document.getElementById('modalTambahKursus'));
        modal.hide();
      }

      function updateKursus() {
        alert('Kursus berhasil diupdate!');
        const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditKursus'));
        modal.hide();
      }

      function confirmDelete() {
        if (confirm('Apakah Anda yakin ingin menghapus kursus ini?')) {
          alert('Kursus berhasil dihapus!');
        }
      }
    </script>
@endpush
