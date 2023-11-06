<?php 
require "funcion.php";

if(isset($_POST["submit"])){

    if(tambah($_POST)){
        echo"
        <script>
    alert('data berhasil dimasukkan');
    document.location.href='index.php';
</script>
        ";
    }else{
        echo"
        gagal ditambah
        ";
    }
}

?>

<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:team.php?pesan=gagal");
	}

	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>tEMSILANTER-sistem penjadwalan lab upt komputer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>tEMSILANTER</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="tambah.php" class="nav-item nav-link active">Tambah</a>
                <a href="index.php" class="nav-item nav-link">Index</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
               
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Dinelia</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/copi1.2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">the best scheduling system</h5>
                                <h1 class="display-3 text-white animated slideInDown">Sistem Informasi Penjadwalan Lab UPT Komputer</h1>
                                <p class="fs-5 text-white mb-4 pb-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/copi1.2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">the best scheduling system</h5>
                                <h1 class="display-3 text-white animated slideInDown">Sistem Informasi Penjadwalan Lab UPT Komputer</h1>
                                <p class="fs-5 text-white mb-4 pb-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container">
        <form class="f" action="" method="post">
        <h4 class="mahok"><a href=""></a></h4><br><br>
        <table  cellpadding="10" cellspacing="0">
            <tr>
           <td> PRODI : </td> 
           <td> <select name="PRODI">
                <option></option>
                <option>Pascasarjana Pendidikan Bahasa dan Sastra Indonesia</option>
                <option>Pascasarjana Pendidikan Ilmu Pengetahuan Sosial</option>
                <option>Pendidikan Guru Sekolah Dasar</option>
                <option>Pendidikan Guru Pendidikan Anak Usia Dini</option>
                <option>Bimbingan konseling</option>
                <option>Pendidikan Pancasila dan Kewarganegaraan</option>
                <option>Pendidikan Sejarah</option>
                <option>Pendidikan Akuntansi</option>
                <option>Pendidikan Ekonomi</option>
                <option>Pendidikan Bahasa dan Sastra Indonesia</option>
                <option>Pendidikan Bahasa Inggris</option>
                <option>Pendidikan Matematika</option>
                <option>Pendidikan Biologi</option>
                <option>Pendidikan Fisika</option>
                <option>Pendidikan Teknik Elektro</option>
                <option>Akuntansi</option>
                <option>Manajemen</option>
                <option>Farmasi</option>
                <option>Ilmu Keolahragaan</option>
                <option>Teknik Informatika</option>
                <option>Sistem Informasi</option>
                <option>Teknik Industri</option>
                <option>Teknik Kimia</option>
                <option>Teknik Elektro</option>
                <option>Hukum</option>
                <option>Pendidikan Profesi Guru</option>
                <option>D3 Manajemen Pajak</option>
           </select>
           </td>
            </tr>
            <tr>
          <td>  HARI : </td> <td> <input type="text" name="HARI" placeholder="hari"></td>
            </tr>
            <tr>
          <td> WAKTU : </td>  <td><input type="text" name="WAKTU" placeholder="waktu"></td>
            </tr>
            <tr>
           <td> LAB-KE :</td> 
           <td><select name="LAB-KE">
               <option></option>
               <option>Lab 1</option>
               <option>Lab 2</option>
               </select>
               </td>
            </tr>
            <tr>
          <td> <button type="submit" name="submit">Kirim!!</button></td> 
            </tr>
            </table>
        </form>
    </div>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Praktikum</h5>
                            <p>Melakukan kegiatan praktikum komputer mahasiswa untuk menunjang perkuliahan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Pelatihan</h5>
                            <p>Melaksanakan pendidikan dan pelatihan aplikasi komputer bagi dosen dan tenaga kependidikan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Perkuliahan</h5>
                            <p>Melaksanakan perkuliahan komputer di lab UPT komputer UNIPMA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Training</h5>
                            <p>Melaksanakan training yang berkaitan dengan komputer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl.Setia Budi No.85, Kanigoro, Kec. Kartoharjo, Kota Madiun, Jawa Timur, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 813-3138-9761</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>uptkomputer@unipma.ac.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Notes during work</h4>
                    <p>Hanya tidak mudah bukan tidak mungkin.</p>   
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Pika Dinelia</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <br><br>
                        Place to work <a class="border-bottom" href="https://themewagon.com">UPT komputer unipma</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>