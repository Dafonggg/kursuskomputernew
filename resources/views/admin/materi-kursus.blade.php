@extends('layouts.admin')

@section('title', 'Materi Kursus | Sistem Kursus Komputer')

@section('content')
<h4 class="fw-bold mb-4">
  <span class="text-muted fw-light">Konten /</span> Materi Kursus
</h4>

<!-- Upload Materi Card -->
<div class="card mb-4">
                <div class="card-header">
                  <h5 class="mb-0">Tambah Materi Baru</h5>
                </div>
                <div class="card-body">
                  <form id="formTambahMateri">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="namaMateri" class="form-label">Nama Materi <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="namaMateri" placeholder="Contoh: Pengenalan HTML" required />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="kursusMateri" class="form-label">Assign ke Kursus <span class="text-danger">*</span></label>
                        <select class="form-select" id="kursusMateri" required>
                          <option value="">Pilih Kursus</option>
                          <option value="web-dev">Web Development</option>
                          <option value="python">Python Programming</option>
                          <option value="database">Database Management</option>
                          <option value="uiux">UI/UX Design</option>
                          <option value="mobile">Mobile App Development</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="jenisFile" class="form-label">Jenis File</label>
                        <select class="form-select" id="jenisFile">
                          <option value="pdf">PDF</option>
                          <option value="doc">DOC/DOCX</option>
                          <option value="ppt">PPT/PPTX</option>
                          <option value="video">Video Link</option>
                          <option value="link">Link Eksternal</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3" id="fileUploadGroup">
                        <label for="fileMateri" class="form-label">Upload File</label>
                        <input type="file" class="form-control" id="fileMateri" accept=".pdf,.doc,.docx,.ppt,.pptx" />
                        <small class="text-body-secondary">Format: PDF, DOC, PPT. Max 10MB</small>
                      </div>
                      <div class="col-12 mb-3" id="linkVideoGroup" style="display: none;">
                        <label for="linkVideo" class="form-label">Link Video (YouTube/Vimeo)</label>
                        <input type="url" class="form-control" id="linkVideo" placeholder="https://www.youtube.com/watch?v=..." />
                      </div>
                      <div class="col-12">
                        <button type="button" class="btn btn-primary" onclick="simpanMateri()">
                          <i class="icon-base ri ri-save-line me-2"></i>
                          Simpan Materi
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!--/ Upload Materi Card -->

              <!-- Materi Kursus Table -->
              <div class="card">
                <div class="card-header d-flex flex-wrap justify-content-between gap-3">
                  <div class="card-title mb-0 me-1">
                    <h5 class="mb-1">Daftar Materi Kursus</h5>
                    <p class="text-body-secondary mb-0">Kelola semua materi pembelajaran</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Cari materi..."
                      id="searchInput" />
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Materi</th>
                          <th>Kursus</th>
                          <th>Jenis File</th>
                          <th>File/Link</th>
                          <th>Tanggal Upload</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <i class="icon-base ri ri-file-pdf-line text-danger me-2"></i>
                              <div>
                                <h6 class="mb-0">Pengenalan HTML Dasar</h6>
                                <small class="text-body-secondary">Materi 1 - Web Development</small>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-label-primary">Web Development</span></td>
                          <td>
                            <span class="badge bg-label-danger">PDF</span>
                          </td>
                          <td>
                            <a href="#" class="text-primary">
                              <i class="icon-base ri ri-download-line me-1"></i>
                              materi_html_dasar.pdf
                            </a>
                          </td>
                          <td>10 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditMateri">
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
                              <i class="icon-base ri ri-youtube-line text-danger me-2"></i>
                              <div>
                                <h6 class="mb-0">Video Tutorial CSS Grid</h6>
                                <small class="text-body-secondary">Materi 2 - Web Development</small>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-label-primary">Web Development</span></td>
                          <td>
                            <span class="badge bg-label-info">Video</span>
                          </td>
                          <td>
                            <a href="https://youtube.com/watch?v=example" target="_blank" class="text-primary">
                              <i class="icon-base ri ri-external-link-line me-1"></i>
                              YouTube Link
                            </a>
                          </td>
                          <td>12 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditMateri">
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
                              <i class="icon-base ri ri-file-word-2-line text-primary me-2"></i>
                              <div>
                                <h6 class="mb-0">Panduan Python untuk Pemula</h6>
                                <small class="text-body-secondary">Materi 1 - Python Programming</small>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-label-info">Python Programming</span></td>
                          <td>
                            <span class="badge bg-label-primary">DOC</span>
                          </td>
                          <td>
                            <a href="#" class="text-primary">
                              <i class="icon-base ri ri-download-line me-1"></i>
                              panduan_python.docx
                            </a>
                          </td>
                          <td>15 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditMateri">
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
                              <i class="icon-base ri ri-presentation-line text-warning me-2"></i>
                              <div>
                                <h6 class="mb-0">MySQL Database Design</h6>
                                <small class="text-body-secondary">Materi 3 - Database Management</small>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-label-secondary">Database Management</span></td>
                          <td>
                            <span class="badge bg-label-warning">PPT</span>
                          </td>
                          <td>
                            <a href="#" class="text-primary">
                              <i class="icon-base ri ri-download-line me-1"></i>
                              mysql_design.pptx
                            </a>
                          </td>
                          <td>18 Jan 2024</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalEditMateri">
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
                      <li class="page-item next">
                        <a class="page-link" href="javascript:void(0);"><i class="icon-base ri ri-arrow-right-s-line"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
<!--/ Materi Kursus Table -->

<!-- Modal Edit Materi -->
    <div class="modal fade" id="modalEditMateri" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Materi Kursus</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formEditMateri">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="editNamaMateri" class="form-label">Nama Materi <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="editNamaMateri" value="Pengenalan HTML Dasar" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editKursusMateri" class="form-label">Assign ke Kursus <span class="text-danger">*</span></label>
                  <select class="form-select" id="editKursusMateri" required>
                    <option value="web-dev" selected>Web Development</option>
                    <option value="python">Python Programming</option>
                    <option value="database">Database Management</option>
                    <option value="uiux">UI/UX Design</option>
                    <option value="mobile">Mobile App Development</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editJenisFile" class="form-label">Jenis File</label>
                  <select class="form-select" id="editJenisFile">
                    <option value="pdf" selected>PDF</option>
                    <option value="doc">DOC/DOCX</option>
                    <option value="ppt">PPT/PPTX</option>
                    <option value="video">Video Link</option>
                    <option value="link">Link Eksternal</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="editFileMateri" class="form-label">Upload File Baru (Opsional)</label>
                  <input type="file" class="form-control" id="editFileMateri" accept=".pdf,.doc,.docx,.ppt,.pptx" />
                </div>
                <div class="col-12 mb-3">
                  <label for="editLinkVideo" class="form-label">Link Video (Jika jenis Video)</label>
                  <input type="url" class="form-control" id="editLinkVideo" placeholder="https://www.youtube.com/watch?v=..." />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="button" class="btn btn-primary" onclick="updateMateri()">
              Update
            </button>
          </div>
        </div>
      </div>
    </div>
<!--/ Modal Edit Materi -->
@endsection

@push('scripts')
<script>
  function simpanMateri() {
    alert('Materi berhasil ditambahkan!');
    document.getElementById('formTambahMateri').reset();
  }

  function updateMateri() {
    alert('Materi berhasil diupdate!');
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalEditMateri'));
    modal.hide();
  }

  function confirmDelete() {
    if (confirm('Apakah Anda yakin ingin menghapus materi ini?')) {
      alert('Materi berhasil dihapus!');
    }
  }

  // Toggle file upload / video link based on file type
  document.getElementById('jenisFile')?.addEventListener('change', function(e) {
    const fileUploadGroup = document.getElementById('fileUploadGroup');
    const linkVideoGroup = document.getElementById('linkVideoGroup');
    
    if (e.target.value === 'video' || e.target.value === 'link') {
      fileUploadGroup.style.display = 'none';
      linkVideoGroup.style.display = 'block';
    } else {
      fileUploadGroup.style.display = 'block';
      linkVideoGroup.style.display = 'none';
    }
  });

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

