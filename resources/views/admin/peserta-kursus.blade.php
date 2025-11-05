@extends('layouts.admin')

@section('title', 'Peserta Kursus | Sistem Kursus Komputer')

@section('content')
<h4 class="fw-bold mb-4">
  <span class="text-muted fw-light">Data /</span> Peserta Kursus
</h4>

              <!-- Peserta Kursus Table -->
<div class="card">
                <div class="card-header d-flex flex-wrap justify-content-between gap-3">
                  <div class="card-title mb-0 me-1">
                    <h5 class="mb-1">Daftar Peserta Kursus</h5>
                    <p class="text-body-secondary mb-0">Total: 245 peserta aktif</p>
                  </div>
                  <div class="d-flex gap-3 align-items-center">
                    <div class="d-flex align-items-center">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Cari peserta..."
                        id="searchInput" />
                    </div>
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#modalTambahPeserta">
                      <i class="icon-base ri ri-add-line me-2"></i>
                      Tambah Peserta
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Peserta</th>
                          <th>Email</th>
                          <th>Kursus</th>
                          <th>Status</th>
                          <th>Tanggal Daftar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Ahmad Fauzi</h6>
                                <small class="text-body-secondary">+62 812-3456-7890</small>
                              </div>
                            </div>
                          </td>
                          <td>ahmad.fauzi@email.com</td>
                          <td>
                            <span class="badge bg-label-primary">Web Development</span>
                          </td>
                          <td>
                            <span class="badge bg-label-success">Aktif</span>
                          </td>
                          <td>15 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditPeserta">
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
                                <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Siti Nurhaliza</h6>
                                <small class="text-body-secondary">+62 812-9876-5432</small>
                              </div>
                            </div>
                          </td>
                          <td>siti.nurhaliza@email.com</td>
                          <td>
                            <span class="badge bg-label-info">Python Programming</span>
                          </td>
                          <td>
                            <span class="badge bg-label-success">Aktif</span>
                          </td>
                          <td>20 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditPeserta">
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
                                <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Budi Santoso</h6>
                                <small class="text-body-secondary">+62 812-1111-2222</small>
                              </div>
                            </div>
                          </td>
                          <td>budi.santoso@email.com</td>
                          <td>
                            <span class="badge bg-label-secondary">Database Management</span>
                          </td>
                          <td>
                            <span class="badge bg-label-success">Aktif</span>
                          </td>
                          <td>25 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditPeserta">
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
                                <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Dewi Sartika</h6>
                                <small class="text-body-secondary">+62 812-3333-4444</small>
                              </div>
                            </div>
                          </td>
                          <td>dewi.sartika@email.com</td>
                          <td>
                            <span class="badge bg-label-success">UI/UX Design</span>
                          </td>
                          <td>
                            <span class="badge bg-label-warning">Lulus</span>
                          </td>
                          <td>10 Des 2023</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditPeserta">
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
                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Rizki Pratama</h6>
                                <small class="text-body-secondary">+62 812-5555-6666</small>
                              </div>
                            </div>
                          </td>
                          <td>rizki.pratama@email.com</td>
                          <td>
                            <span class="badge bg-label-danger">Mobile App Dev</span>
                          </td>
                          <td>
                            <span class="badge bg-label-success">Aktif</span>
                          </td>
                          <td>5 Feb 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditPeserta">
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
<!--/ Peserta Kursus Table -->

<!-- Modal Tambah Peserta -->
    <div class="modal fade" id="modalTambahPeserta" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Peserta Kursus</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formTambahPeserta">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="namaLengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="namaLengkap" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="telepon" class="form-label">Nomor Telepon</label>
                  <input type="tel" class="form-control" id="telepon" placeholder="+62 812-3456-7890" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="kursus" class="form-label">Kursus <span class="text-danger">*</span></label>
                  <select class="form-select" id="kursus" required>
                    <option value="">Pilih Kursus</option>
                    <option value="web-dev">Web Development</option>
                    <option value="python">Python Programming</option>
                    <option value="database">Database Management</option>
                    <option value="uiux">UI/UX Design</option>
                    <option value="mobile">Mobile App Development</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" id="status">
                    <option value="aktif" selected>Aktif</option>
                    <option value="lulus">Lulus</option>
                    <option value="nonaktif">Nonaktif</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="tanggalDaftar" class="form-label">Tanggal Daftar</label>
                  <input type="date" class="form-control" id="tanggalDaftar" />
                </div>
                <div class="col-12 mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="simpanPeserta()">
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal Tambah Peserta -->

    <!-- Modal Edit Peserta -->
    <div class="modal fade" id="modalEditPeserta" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Peserta Kursus</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formEditPeserta">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="editNamaLengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="editNamaLengkap" value="Ahmad Fauzi" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editEmail" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="editEmail" value="ahmad.fauzi@email.com" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editTelepon" class="form-label">Nomor Telepon</label>
                  <input type="tel" class="form-control" id="editTelepon" value="+62 812-3456-7890" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editKursus" class="form-label">Kursus <span class="text-danger">*</span></label>
                  <select class="form-select" id="editKursus" required>
                    <option value="web-dev" selected>Web Development</option>
                    <option value="python">Python Programming</option>
                    <option value="database">Database Management</option>
                    <option value="uiux">UI/UX Design</option>
                    <option value="mobile">Mobile App Development</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editStatus" class="form-label">Status</label>
                  <select class="form-select" id="editStatus">
                    <option value="aktif" selected>Aktif</option>
                    <option value="lulus">Lulus</option>
                    <option value="nonaktif">Nonaktif</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editTanggalDaftar" class="form-label">Tanggal Daftar</label>
                  <input type="date" class="form-control" id="editTanggalDaftar" value="2024-01-15" />
                </div>
                <div class="col-12 mb-3">
                  <label for="editAlamat" class="form-label">Alamat</label>
                  <textarea class="form-control" id="editAlamat" rows="3">Jl. Contoh No. 123, Jakarta</textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="updatePeserta()">
              Update
            </button>
          </div>
        </div>
      </div>
    </div>
<!--/ Modal Edit Peserta -->
@endsection

@push('scripts')
<script>
  function simpanPeserta() {
    // Simulasi penyimpanan data
    alert('Peserta berhasil ditambahkan!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalTambahPeserta'));
    modal.hide();
  }

  function updatePeserta() {
    // Simulasi update data
    alert('Data peserta berhasil diupdate!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditPeserta'));
    modal.hide();
  }

  function confirmDelete() {
    if (confirm('Apakah Anda yakin ingin menghapus peserta ini?')) {
      alert('Peserta berhasil dihapus!');
    }
  }

  // Simple search functionality
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

