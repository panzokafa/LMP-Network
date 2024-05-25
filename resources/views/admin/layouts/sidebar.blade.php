  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/admin" class="brand-link">
          <img src="{{ asset('assets/img/LMP_logo.png') }}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
          <span class="brand-text font-weight-light ">.</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Admin LMP</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="{{ route('admin.dashboard') }}" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('admin.user') }}" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              User
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="/service/chat" class="nav-link d-flex justify-content-between align-items-center">
                          <div>
                              <i class="nav-icon fas fa-comments"></i>
                              <p class="mb-0 d-inline">Chat User</p>
                          </div>
                          @if ($conversations !== 0)
                              <span
                                  class="notification-badge fw-bold d-flex align-items-center justify-content-center text-white bg-primary rounded-circle"
                                  style="width: 24px; height: 24px;">
                                  <span class="badge-text">{{ $conversations }}</span>
                              </span>
                          @endif
                      </a>
                  </li>




                  <li class="nav-item">
                      <a href="{{ route('admin.type') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Type
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('admin.product') }}" class="nav-link">
                          <i class="nav-icon fas fa-shopping-basket"></i>
                          <p>
                              Products
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('admin.logout') }}" class="nav-link bg-danger ">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>


  <script>
      function checkNewMessages() {
          $.ajax({
              url: '/admin/check-new-messages',
              method: 'GET',
              success: function(response) {
                  if (response.conversations > 0) {
                      // Ada pesan baru, perbarui notifikasi
                      $('.notification-badge').text(response.conversations).show();
                  } else {
                      // Tidak ada pesan baru, sembunyikan notifikasi
                      $('.notification-badge').hide();
                  }
              }
          });
      }

      // Panggil fungsi checkNewMessages setiap 10 detik
      setInterval(checkNewMessages, 10000);
  </script>
