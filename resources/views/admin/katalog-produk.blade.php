@extends('layouts.admin')

@section('title', 'Katalog Produk | Sistem Kursus Komputer')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold mb-0">
    <span class="text-muted fw-light">Katalog /</span> Produk
  </h4>
  <button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#modalTambahProduk">
    <i class="icon-base ri ri-add-line me-2"></i>
    Tambah Produk
  </button>
</div>

<!-- Produk Cards -->
<div class="row g-4 mb-4">
  <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img
                      class="card-img-top"
                      src="{{ asset('assets/img/elements/2.png') }}"
                      alt="Buku Panduan Web Development"
                      style="height: 200px; object-fit: cover;" />
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Buku Panduan Web Development</h5>
                        <span class="badge bg-label-success">Tersedia</span>
                      </div>
                      <p class="card-text text-body-secondary">
                        Buku lengkap panduan web development dari dasar hingga advanced. Cocok untuk pemula dan profesional.
                      </p>
                      <div class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                          <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
                          <small class="text-body-secondary fw-bold">Rp 125.000</small>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="icon-base ri ri-box-3-line me-2"></i>
                          <small class="text-body-secondary">Stok: 45 unit</small>
                        </div>
                      </div>
                      <div class="d-flex gap-2">
                        <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditProduk">
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
                      alt="Python Programming Guide"
                      style="height: 200px; object-fit: cover;" />
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Python Programming Guide</h5>
                        <span class="badge bg-label-success">Tersedia</span>
                      </div>
                      <p class="card-text text-body-secondary">
                        Panduan lengkap belajar Python dari zero to hero. Termasuk praktik dan contoh kode.
                      </p>
                      <div class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                          <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
                          <small class="text-body-secondary fw-bold">Rp 150.000</small>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="icon-base ri ri-box-3-line me-2"></i>
                          <small class="text-body-secondary">Stok: 32 unit</small>
                        </div>
                      </div>
                      <div class="d-flex gap-2">
                        <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditProduk">
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
                      alt="Database Design Handbook"
                      style="height: 200px; object-fit: cover;" />
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">Database Design Handbook</h5>
                        <span class="badge bg-label-warning">Tidak Tersedia</span>
                      </div>
                      <p class="card-text text-body-secondary">
                        Buku panduan desain database dan optimasi query. MySQL, MongoDB, dan PostgreSQL.
                      </p>
                      <div class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                          <i class="icon-base ri ri-money-dollar-circle-line me-2"></i>
                          <small class="text-body-secondary fw-bold">Rp 135.000</small>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="icon-base ri ri-box-3-line me-2"></i>
                          <small class="text-body-secondary">Stok: 0 unit</small>
                        </div>
                      </div>
                      <div class="d-flex gap-2">
                        <button class="btn btn-label-primary btn-sm flex-fill" data-bs-toggle="modal" data-bs-target="#modalEditProduk">
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
<!--/ Produk Cards -->

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
<!-- Modal Tambah Produk -->
    <div class="modal fade" id="modalTambahProduk" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Produk</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formTambahProduk">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="namaProduk" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="namaProduk" placeholder="Contoh: Buku Panduan Web Development" required />
                </div>
                <div class="col-12 mb-3">
                  <label for="deskripsiProduk" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="deskripsiProduk" rows="3" placeholder="Jelaskan tentang produk ini..." required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="hargaProduk" class="form-label">Harga <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" id="hargaProduk" placeholder="125000" required />
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="stokProduk" class="form-label">Stok <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="stokProduk" placeholder="45" min="0" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="gambarProduk" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="gambarProduk" accept="image/*" />
                  <small class="text-body-secondary">Format: JPG, PNG, Max 2MB</small>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="statusProduk" class="form-label">Status</label>
                  <select class="form-select" id="statusProduk">
                    <option value="tersedia" selected>Tersedia</option>
                    <option value="tidak-tersedia">Tidak Tersedia</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="simpanProduk()">
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal Tambah Produk -->

    <!-- Modal Edit Produk -->
    <div class="modal fade" id="modalEditProduk" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Produk</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formEditProduk">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="editNamaProduk" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="editNamaProduk" value="Buku Panduan Web Development" required />
                </div>
                <div class="col-12 mb-3">
                  <label for="editDeskripsiProduk" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="editDeskripsiProduk" rows="3" required>Buku lengkap panduan web development dari dasar hingga advanced. Cocok untuk pemula dan profesional.</textarea>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editHargaProduk" class="form-label">Harga <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" id="editHargaProduk" value="125000" required />
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editStokProduk" class="form-label">Stok <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="editStokProduk" value="45" min="0" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editGambarProduk" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="editGambarProduk" accept="image/*" />
                  <small class="text-body-secondary">Format: JPG, PNG, Max 2MB</small>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editStatusProduk" class="form-label">Status</label>
                  <select class="form-select" id="editStatusProduk">
                    <option value="tersedia" selected>Tersedia</option>
                    <option value="tidak-tersedia">Tidak Tersedia</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="updateProduk()">
              Update
            </button>
          </div>
        </div>
      </div>
    </div>
<!--/ Modal Edit Produk -->
@endsection

@push('scripts')
<script>
  function simpanProduk() {
    alert('Produk berhasil ditambahkan!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalTambahProduk'));
    modal.hide();
  }

  function updateProduk() {
    alert('Produk berhasil diupdate!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditProduk'));
    modal.hide();
  }

  function confirmDelete() {
    if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
      alert('Produk berhasil dihapus!');
    }
  }
</script>
@endpush
