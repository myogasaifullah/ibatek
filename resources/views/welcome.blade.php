<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ibatek || Sistem Kendali Mahasiswa Beasiswa</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/logo/ibtk.png">

  <!-- Font & Icons -->
  <link rel="stylesheet" crossorigin="anonymous"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap & Theme -->
  <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/theme.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }

    .navbar {
      transition: all 0.4s ease;
      background: white;
    }

    .img-fluid {
      animation: float 3s ease-in-out infinite; /* Nama animasi, durasi, timing function, dan infinite loop */
    }

    @keyframes float {
      0% {
        transform: translatey(0px); /* Posisi awal */
      }
      50% {
        transform: translatey(-20px); /* Bergerak ke atas 20px dari posisi awal */
      }
      100% {
        transform: translatey(0px); /* Kembali ke posisi awal */
      }
    }

    .navbar.scrolled {
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .btn-primary,
    .btn-info,
    .btn-secondary {
      border-radius: 30px;
      padding: 10px 25px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover,
    .btn-info:hover,
    .btn-secondary:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    section {
      padding: 60px 0;
    }

    .features-items {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .features-items:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .navbar .btn-custom {
      background-color: #ff9900;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 8px 20px;
      font-weight: 600;
      transition: all 0.3s ease-in-out;
    }

    .navbar .btn-custom:hover {
      background-color: #e68900;
      color: #fff;
    }
    .social-icon {
      color: #555; /* Ganti dengan warna yang Anda inginkan */
      font-size: 1.5rem;
      margin-right: 15px;
      transition: color 0.3s ease;
    }

    .social-icon:hover {
      color: #ff9900; /* Ganti dengan warna hover yang Anda inginkan */
    }
  </style>
</head>

<body>
  <main class="main" id="top">
    <!-- Navbar -->
    <nav class="navbar navbar-light sticky-top">
      <div class="container py-2 d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="/login">
          <img src="{{ asset('build/assets/images/logo/ibatek.png') }}" alt="IBATEK" height="50" />
        </a>
        <div class="d-flex gap-2">
          <button class="btn btn-custom rounded-pill px-4" onclick="window.location.href='/login'">Login</button>
        </div>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section class="mt-6 fade-in">
      <div class="container">
        <div class="row align-items-center text-center text-md-start">
          <div class="col-md-6">
            <h1 class="display-6 fw-bold">Sistem Kendali Mahasiswa IBATEK</h1>
            <p class="fs-2 mt-3">Platform terintegrasi untuk memantau, mengelola, dan mengevaluasi aktivitas mahasiswa penerima beasiswa IBATEK.</p>
            <button class="btn btn-secondary mt-3" onclick="window.location.href='/login'">Masuk ke Sistem</button>
            <button class="btn btn-secondary mt-3" onclick="window.location.href='/register'">Daftar Sekarang</button>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <img class="img-fluid" src="assets/img/gallery/dashboard.png" alt="Dashboard" />
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-5 bg-light">
      <div class="container">
        <h1 class="display-8 fw-bold text-center mb-3">Fitur Utama</h1>
        <p class="fs-2 text-center text-muted mb-5">Fasilitas lengkap untuk mendukung pengelolaan mahasiswa penerima beasiswa.</p>
        
        <div class="row g-4">
          <!-- Feature 1 -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm feature-card text-center border-0">
              <div class="card-body p-4">
                <img src="assets/img/gallery/dashboardicon.png" alt="Dashboard" class="mb-3" style="width:60px;height:60px;" />
                <h5 class="fw-bold">Dashboard Interaktif</h5>
                <p class="text-muted">Pantau data mahasiswa dan kegiatan secara real-time dalam satu tampilan ringkas.</p>
              </div>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm feature-card text-center border-0">
              <div class="card-body p-4">
                <img src="assets/img/gallery/comment.png" alt="Komunikasi" class="mb-3" style="width:60px;height:60px;" />
                <h5 class="fw-bold">Komunikasi Terpusat</h5>
                <p class="text-muted">Pesan & pengumuman internal untuk memudahkan koordinasi antara pengurus dan mahasiswa.</p>
              </div>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm feature-card text-center border-0">
              <div class="card-body p-4">
                <img src="assets/img/gallery/statistics.png" alt="Statistik" class="mb-3" style="width:60px;height:60px;" />
                <h5 class="fw-bold">Statistik & Laporan</h5>
                <p class="text-muted">Hasilkan laporan akademik, kegiatan, dan kehadiran.</p>
              </div>
            </div>
          </div>

          <!-- Feature 4 -->
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm feature-card text-center border-0">
              <div class="card-body p-4">
                <img src="assets/img/gallery/profile.png" alt="Profil" class="mb-3" style="width:60px;height:60px;" />
                <h5 class="fw-bold">Manajemen Profil</h5>
                <p class="text-muted">Kelola biodata, status beasiswa, dan riwayat kegiatan setiap mahasiswa dalam satu sistem.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="bg-primary-gradient text-white text-center fade-in">
      <div class="container p-5 rounded-3">
        <h4 class="opacity-75">SIAP MENGGUNAKAN</h4>
        <h2 class="fw-bold mt-2">Mulai kelola data mahasiswa dengan IBATEK sekarang</h2>
        <button class="btn btn-light mt-3" onclick="window.location.href='/login'">
          Login Sekarang <span class="fas fa-arrow-right"></span>
        </button>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-dark pt-4 mt-5">
      <div class="container">
        <div class="row">

          <!-- Logo & Deskripsi -->
          <div class="col-md-4 mb-3">
            <a class="navbar-brand" href="/">
              <img src="{{ asset('build/assets/images/logo/ibatek.png') }}" alt="IBATEK" height="50">
            </a>
            <p class="mt-2 text-muted">
              Sistem Kendali Mahasiswa Beasiswa IBATEK <br>
              Platform untuk memantau, mengelola, dan mengevaluasi aktivitas mahasiswa penerima beasiswa.
            </p>
          </div>

          <!-- Navigasi -->
          <div class="col-md-4 mb-3">
            <h5 class="fw-bold" style="color: #ff9900;">Navigasi</h5>
            <ul class="list-unstyled">
              <li><a href="/" class="footer-link">Beranda</a></li>
              <li><a href="/login" class="footer-link">Login</a></li>
              <li><a href="/register" class="footer-link">Register</a></li>
              <li><a href="/about" class="footer-link">Tentang</a></li>
            </ul>
          </div>

          <!-- Kontak -->
          <div class="col-md-4 mb-3">
            <h5 class="fw-bold" style="color: #ff9900;">Kontak</h5>
            <p class="mb-1 text-muted"><i class="bi bi-geo-alt-fill text-warning"></i> Jl. ZA. Pagar Alam No.9 -11, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132</p>
            <p class="mb-1 text-muted"><i class="bi bi-envelope-fill text-warning"></i> teknokrat.ac.id</p>
            <p class="mb-1 text-muted"><i class="bi bi-telephone-fill text-warning"></i> +62 812 3456 7890</p>
          </div>

          <div class="mt-3">
            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
          </div>

        </div>

        <!-- Copyright -->
        <div class="text-center py-3 border-top mt-3">
          <small class="text-muted">© 2025 IBATEK. All rights reserved.</small>
        </div>
      </div>
    </footer>
    <style>
      .footer-link {
        color: #808080;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .footer-link:hover {
        color: #ff9900;
      }
    </style>


  <!-- Scripts -->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/theme.js"></script>

  <script>
    // Navbar shrink effect
    window.addEventListener("scroll", function () {
      const navbar = document.querySelector(".navbar");
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    });

    // Fade-in on scroll
    const fadeEls = document.querySelectorAll(".fade-in");
    function checkFade() {
      fadeEls.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
          el.classList.add("visible");
        }
      });
    }
    window.addEventListener("scroll", checkFade);
    window.addEventListener("load", checkFade);
  </script>
</body>

</html>
