<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sunset</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Lobster&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to bottom, #ff7e5f, #feb47b); /* Sunset gradient */
      color: #fff; /* Warna teks putih untuk kontras */
    }

    header {
      background: rgba(255, 126, 95, 0.7); /* Transparan untuk efek sunset */
    }

    h1 {
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Tambahkan bayangan pada teks */
    }

    h2.welcome {
      font-family: 'Lobster', cursive; /* Menggunakan font Lobster */
      font-size: 2.5rem; /* Ukuran font yang lebih besar */
      text-align: center; /* Teks di tengah */
      color: #fff; /* Warna putih */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Tambahkan bayangan untuk efek yang lebih menarik */
    }

    footer {
      background: rgba(0, 0, 0, 0.5); /* Transparan untuk footer */
    }

    footer a {
      color: #fff; /* Tautan footer berwarna putih */
    }

    .card {
      border: none; /* Menghilangkan border default */
    }

    .card-img-top {
      height: 200px; /* Menjaga tinggi gambar seragam */
      object-fit: cover; /* Memastikan gambar terpotong dengan baik */
    }
  </style>
</head>

<body>
  <!-- Header with Navbar -->
  <header>
    <h1 class="text-center p-3">Sunset is the best</h1>
    <?php include "includes/navbar.php"; ?>
  </header>

  <!-- Main Container -->
  <div class="container" id="pageContent">
    <h2 class="welcome mt-4">Selamat Datang di Halaman Saya!</h2> <!-- Kalimat Selamat Datang -->
    
    <!-- Portofolio Section -->
    <section id="portfolio" class="mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="Sunset.jpeg" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <h5 class="card-title">Sunset on the bridge </h5>
              <p class="card-text">Foto ini di ambil saat matahari terbenam. di pantai, sangat indah dan cantik.</p>
              <a href="https://berita.pesisirselatankab.go.id/berita/detail/sunset-satu-fenomena-alam-yang-unik-dan-menarik-untuk-dilihat-dan-dinikmati" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="mon.jpeg" class="card-img-top" alt="Project 2">
            <div class="card-body">
              <h5 class="card-title">Sunset on the mountain</h5>
              <p class="card-text">Foto ini di ambil ketika matahari terbenam di gunung, sangat indah.</p>
              <a href="https://www.rri.co.id/lain-lain/960337/menikmati-sunset-di-puncak-telomoyo" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="Monas.jpeg" class="card-img-top" alt="Project 3">
            <div class="card-body">
              <h5 class="card-title">Sunset at Monas</h5>
              <p class="card-text">Foto ini diambil ketika matahari terbenam di monas, tepatnya berada di jakarta.</p>
              <a href="link_to_project3" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Existing Content -->
    <?php
      // Check if a specific page is requested
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        
        // Switch case to include the corresponding page
        switch ($page) {
          case 'home':
            include "home.php";
            break;
          case 'about':
            include "about.php";
            break;
          case 'contact':
            include "contact.php";
            break;
          case 'form':
            include "form.php";
            break;
          case 'datatables':
            include "datatables.php";
            break;  
          case '404':
            include "404.php";
            break;  
          default:
            include "home.php"; // Default to home if no valid page is found
        }
      } else {
        // Default to home page if no page parameter is provided
        include "home.php";
      }
    ?>
  </div>

  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>

  <!-- Initialize DataTable -->
  <script>
    // Initialize DataTables when the DOM content is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
      if (document.querySelector("#example")) {
        new DataTable("#example"); // Default zero configuration
      }
    });
  </script>
</body>

</html>
