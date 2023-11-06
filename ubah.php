<?php 
require 'funcion.php';

$k=$_GET["y"];

$array = query("SELECT * FROM lab WHERE ID = $k")[0];




 if(isset($_POST["t"])){


    // if(ubah($_POST)){
    //     echo "
    //     <script>
    //             alert('data berhasil diubah');
    //             document.location.href='index.php';
    //        </script>";
    // }

   mysqli_query($coon, "UPDATE lab SET
    PRODI = '$_POST[PRODI]' 
    WHERE ID = $k
    ");
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href='index.php';
    </script>
        ";
        mysqli_query($coon, "UPDATE lab SET
        HARI = '$_POST[HARI]' 
        WHERE ID = $k
        ");
            echo "
            <script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>
            ";
            mysqli_query($coon, "UPDATE lab SET
            WAKTU = '$_POST[WAKTU]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            LAB-KE = '$_POST[LABKE]' 
            WHERE ID = $k
            ");
                
                   
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

    <style>
        .from{
            margin: 150px auto;
            width: 60%;
            border: 1px solid black;
            border-radius: 20px;
            padding: 50px;
            background-color: skyblue;
        }
        table{
            margin: auto;
        }
    </style>
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
                <a href="tambah.php" class="nav-item nav-link">Tambah</a>
                <a href="index.php" class="nav-item nav-link">Index</a>
                <a href="ubah.php" class="nav-item nav-link active">ubah.php</a>
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


    <!-- Header Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/ubah.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">ubah</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ubah data</h6>
                <h1 class="mb-5">change scheduling data</h1>
            </div>

    <div class="container">
        <form class="from" action="" method="post">
            <input type="hidden" name="ID" value="<?php echo $array["ID"]?>"><br>
            <table cellpadding="5" cellspacing="0">
                <tbody>
            <tr>
          <td>  PRODI :</td><td><input type="text" name="PRODI" placeholder="prodi" value="<?php echo $array["PRODI"]?>"></td>
          </tr>
          <tr>
           <td>HARI :</td><td><input type="text" name="HARI" placeholder="hari"  value="<?php echo $array["HARI"]?>"></td>
           </tr>
           <tr>
           <td> WAKTU :</td><td><input type="text" name="WAKTU" placeholder="waktu"  value="<?php echo $array["WAKTU"]?>"></td>
           </tr>
      
           <tr>
         <td> LAB-KE :</td><td><input type="text" name="LABKE" placeholder="lab-ke"  value="<?php echo $array["LAB-KE"]?>"></td>
           </tr>
       
        <tr>
           <td><button type="submit" name="t">Kirim!!</button>
           </tr>
           </tbody>
            </table>
        </form>
    </div>
</body>
</html>
        </div>
    </div>
    <!-- Categories Start -->

        

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
                        Place to Work <a class="border-bottom" href="">UPT komputer UNIPMA</a>
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