<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel FraLang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    header {
      background: #ffffff;
      border-bottom: 1px solid #e5e5e5;
    }
    header h1 {
      color: #222;
    }
    .banner img {
      height: 500px;
      object-fit: cover;
    }
    section h2, section h3 {
      font-weight: bold;
      color: #222;
    }
    .btn-outline-dark {
      border-radius: 25px;
      transition: 0.3s;
    }
    .btn-outline-dark:hover {
      background-color: #222;
      color: #fff;
    }
    .experience-card {
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .experience-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    footer {
      background: #111;
    }
    footer p {
      margin: 0;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- Header
  <header class="d-flex align-items-center justify-content-between px-4 py-3 shadow-sm sticky-top">
    <h1 class="fs-3 fw-bold">Hotel FraLang</h1>
    <div class="d-flex align-items-center gap-3">
      <button class="btn btn-light rounded-circle shadow-sm"><span class="material-icons">notifications</span></button>
      <button class="btn btn-light rounded-circle shadow-sm"><span class="material-icons">search</span></button>
    </div>
  </header> -->

  <!-- Welcome Section -->
  <section class="text-center py-5">
    <h2 class="mb-3">Welcome to <span class="text-primary">Hotel FraLang</span></h2>
    <p class="lead text-muted">Nikmati pengalaman menginap terbaik dengan layanan premium dan kenyamanan maksimal.</p>
  </section>

<!-- Navbar -->
<nav class="navbar bg-white shadow-sm">
  <div class="container d-flex justify-content-between align-items-center w-100">
    <a class="nav-link" href="#">Home</a>
    <a class="btn btn-outline-dark px-3" href="#">Book Now</a>
    <a class="nav-link" href="#">Profile</a>
    
  </div>
</nav>

  <!-- Banner -->
  <section class="banner">
    <img src="../../img/bannerhoteluser.png" class="img-fluid w-100" alt="Hotel FraLang Banner">
  </section>

  <!-- FRA Experience -->
  <section class="py-5 text-center">
    <h3 class="mb-4">FRA EXPERIENCE</h3>
    <p class="mb-5 text-muted">Nikmati pengalaman terbaik bersama kami dengan fasilitas modern dan layanan berkualitas tinggi.</p>
    
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="experience-card p-3 rounded bg-white shadow-sm">
            <img src="../../img/Ballroom.png" class="img-fluid mb-3 rounded" alt="Ballroom">
            <h5 class="fw-bold">GRAND BALLROOM</h5>
            <p class="text-muted">Ballroom megah dengan kapasitas hingga 4,000 tamu.</p>
            <a href="#" class="btn btn-outline-dark">VIEW MORE</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="experience-card p-3 rounded bg-white shadow-sm">
            <img src="../../img/WaterPark.png" class="img-fluid mb-3 rounded" alt="Waterpark">
            <h5 class="fw-bold">WATERPARK</h5>
            <p class="text-muted">Taman bermain air seru untuk keluarga dan anak-anak.</p>
            <a href="#" class="btn btn-outline-dark">VIEW MORE</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="experience-card p-3 rounded bg-white shadow-sm">
            <img src="../../img/FraCafe.png" class="img-fluid mb-3 rounded" alt="Cafe">
            <h5 class="fw-bold">FRA CAFE</h5>
            <p class="text-muted">Tempat nyaman untuk menikmati kopi, snack, dan dessert pilihan.</p>
            <a href="#" class="btn btn-outline-dark">VIEW MORE</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rooms & Suites -->
<section class="py-5 bg-light text-center">
  <h3 class="mb-4">ROOMS & SUITES</h3>

  <div class="container">
    <div id="roomCarousel" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
      <div class="carousel-inner">
        
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="../../img/bedroom 1.png" class="d-block w-100" alt="Executive One-Bedroom Suite">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5>Executive One-Bedroom Suite</h5>
            <p>Enduring sense of indulgence in sheer luxury.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="../../img/bedroom 2.png" class="d-block w-100" alt="Premier Room">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5>Premier Room</h5>
            <p>Sleep comfortably with your children in a more efficient space.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="../../img/bedroom 3.png" class="d-block w-100" alt="Grand Deluxe Room">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5>Grand Deluxe Room</h5>
            <p>Spacious luxury with refined style and relaxing ambiance.</p>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>


  <!-- Footer -->
  <footer class="text-center py-4 text-white">
    <p>&copy; 2025 Hotel FraLang. All rights reserved.</p>
    <p class="text-muted">Didesain untuk kenyamanan dan pengalaman menginap Anda.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
