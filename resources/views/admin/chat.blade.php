@extends('layouts.admin')

@section('title', 'Chat | Sistem Kursus Komputer')

@section('content')
<h4 class="fw-bold mb-4">
  <span class="text-muted fw-light">Komunikasi /</span> Chat
</h4>

<!-- Chat Interface -->
<div class="card" style="height: calc(100vh - 280px);">
  <div class="row g-0 h-100">
    <!-- Chat Sidebar -->
    <div class="col-md-4 border-end">
      <div class="card-header border-bottom p-3">
        <div class="input-group">
          <span class="input-group-text border-0 bg-body">
            <i class="icon-base ri ri-search-line"></i>
          </span>
          <input type="text" class="form-control border-0 bg-body" placeholder="Cari chat..." />
        </div>
      </div>
      <div class="card-body p-0" style="height: calc(100% - 70px); overflow-y: auto;">
        <!-- Chat List -->
        <div class="list-group list-group-flush">
          <a href="javascript:void(0);" class="list-group-item list-group-item-action active border-0 p-3" onclick="selectChat('ahmad')">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-sm me-3 position-relative">
                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                <span class="badge rounded-pill bg-success position-absolute bottom-0 end-0" style="width: 10px; height: 10px; border: 2px solid white;"></span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Ahmad Fauzi</h6>
                <small class="text-body-secondary">Halo admin, saya ingin...</small>
              </div>
              <div class="text-end">
                <small class="text-body-secondary">14:30</small>
                <span class="badge bg-primary rounded-pill ms-1">2</span>
              </div>
            </div>
          </a>
          <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 p-3" onclick="selectChat('siti')">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-sm me-3 position-relative">
                <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
                <span class="badge rounded-pill bg-success position-absolute bottom-0 end-0" style="width: 10px; height: 10px; border: 2px solid white;"></span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Siti Nurhaliza</h6>
                <small class="text-body-secondary">Terima kasih atas info...</small>
              </div>
              <div class="text-end">
                <small class="text-body-secondary">12:15</small>
              </div>
            </div>
          </a>
          <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 p-3" onclick="selectChat('budi')">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-sm me-3 position-relative">
                <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
                <span class="badge rounded-pill bg-secondary position-absolute bottom-0 end-0" style="width: 10px; height: 10px; border: 2px solid white;"></span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Budi Santoso</h6>
                <small class="text-body-secondary">Kapan jadwal kursus...</small>
              </div>
              <div class="text-end">
                <small class="text-body-secondary">Kemarin</small>
              </div>
            </div>
          </a>
          <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 p-3" onclick="selectChat('dewi')">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-sm me-3 position-relative">
                <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
                <span class="badge rounded-pill bg-success position-absolute bottom-0 end-0" style="width: 10px; height: 10px; border: 2px solid white;"></span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Dewi Sartika</h6>
                <small class="text-body-secondary">Saya sudah selesai...</small>
              </div>
              <div class="text-end">
                <small class="text-body-secondary">10:45</small>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--/ Chat Sidebar -->

    <!-- Chat Content -->
    <div class="col-md-8 d-flex flex-column">
      <!-- Chat Header -->
      <div class="card-header border-bottom d-flex align-items-center justify-content-between p-3">
        <div class="d-flex align-items-center">
          <div class="avatar avatar-sm me-3">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" id="chatAvatar" />
          </div>
          <div>
            <h6 class="mb-0" id="chatName">Ahmad Fauzi</h6>
            <small class="text-body-secondary" id="chatStatus">Aktif sekarang</small>
          </div>
        </div>
        <div>
          <button class="btn btn-sm btn-label-secondary">
            <i class="icon-base ri ri-more-line"></i>
          </button>
        </div>
      </div>
      <!--/ Chat Header -->

      <!-- Chat Messages -->
      <div class="flex-grow-1 p-4" style="overflow-y: auto; background-color: #f5f5f9;" id="chatMessages">
        <!-- Messages will be loaded here -->
        <div class="mb-4">
          <div class="d-flex align-items-start mb-2">
            <div class="avatar avatar-sm me-3">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="flex-grow-1">
              <div class="bg-white rounded p-3 shadow-sm" style="max-width: 70%;">
                <p class="mb-0">Halo admin, saya ingin bertanya tentang jadwal kursus Web Development minggu depan.</p>
              </div>
              <small class="text-body-secondary ms-2">14:30</small>
            </div>
          </div>
        </div>

        <div class="mb-4 d-flex justify-content-end">
          <div class="flex-grow-1" style="max-width: 70%;">
            <div class="bg-primary text-white rounded p-3 shadow-sm ms-auto">
              <p class="mb-0">Halo Ahmad, jadwal kursus Web Development minggu depan adalah Senin dan Rabu, jam 09:00-11:00 WIB.</p>
            </div>
            <small class="text-body-secondary d-block text-end mt-1">14:32</small>
          </div>
          <div class="avatar avatar-sm ms-3">
            <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle" />
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex align-items-start mb-2">
            <div class="avatar avatar-sm me-3">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div class="flex-grow-1">
              <div class="bg-white rounded p-3 shadow-sm" style="max-width: 70%;">
                <p class="mb-0">Baik, terima kasih informasinya. Saya akan hadir tepat waktu.</p>
              </div>
              <small class="text-body-secondary ms-2">14:35</small>
            </div>
          </div>
        </div>
      </div>
      <!--/ Chat Messages -->

      <!-- Chat Input -->
      <div class="card-footer border-top p-3">
        <div class="input-group">
          <button class="btn btn-label-secondary" type="button">
            <i class="icon-base ri ri-attachment-line"></i>
          </button>
          <input type="text" class="form-control" placeholder="Tulis pesan..." id="messageInput" />
          <button class="btn btn-primary" type="button" onclick="sendMessage()">
            <i class="icon-base ri ri-send-plane-line"></i>
          </button>
        </div>
      </div>
      <!--/ Chat Input -->
    </div>
    <!--/ Chat Content -->
  </div>
</div>
<!--/ Chat Interface -->
@endsection

@push('scripts')
<script>
  function selectChat(userId) {
    // Update active chat in sidebar
    document.querySelectorAll('.list-group-item').forEach(item => {
      item.classList.remove('active');
    });
    event.currentTarget.classList.add('active');

    // Update chat header and messages based on user
    const chatData = {
      'ahmad': { name: 'Ahmad Fauzi', avatar: '/assets/img/avatars/1.png', status: 'Aktif sekarang' },
      'siti': { name: 'Siti Nurhaliza', avatar: '/assets/img/avatars/2.png', status: 'Aktif sekarang' },
      'budi': { name: 'Budi Santoso', avatar: '/assets/img/avatars/3.png', status: 'Offline' },
      'dewi': { name: 'Dewi Sartika', avatar: '/assets/img/avatars/4.png', status: 'Aktif sekarang' }
    };

    const user = chatData[userId] || chatData['ahmad'];
    document.getElementById('chatName').textContent = user.name;
    document.getElementById('chatAvatar').src = user.avatar;
    document.getElementById('chatStatus').textContent = user.status;

    // Here you would load messages from API
    // For now, just show a placeholder
  }

  function sendMessage() {
    const input = document.getElementById('messageInput');
    const message = input.value.trim();
    
    if (message) {
      const messagesDiv = document.getElementById('chatMessages');
      const now = new Date();
      const timeStr = now.getHours() + ':' + String(now.getMinutes()).padStart(2, '0');
      
      // Create message bubble
      const messageHtml = `
        <div class="mb-4 d-flex justify-content-end">
          <div class="flex-grow-1" style="max-width: 70%;">
            <div class="bg-primary text-white rounded p-3 shadow-sm ms-auto">
              <p class="mb-0">${message}</p>
            </div>
            <small class="text-body-secondary d-block text-end mt-1">${timeStr}</small>
          </div>
          <div class="avatar avatar-sm ms-3">
            <img src="/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
          </div>
        </div>
      `;
      
      messagesDiv.insertAdjacentHTML('beforeend', messageHtml);
      messagesDiv.scrollTop = messagesDiv.scrollHeight;
      input.value = '';
    }
  }

  // Allow Enter key to send message
  document.getElementById('messageInput')?.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      sendMessage();
    }
  });
</script>
@endpush
