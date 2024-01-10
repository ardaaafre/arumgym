<!DOCTYPE html>
<html lang="en">
<?php
include('baglan.php');
$sorgu_gnl = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu_gnl);
?>
<head>
    <meta charset="utf-8">
    <title><?php echo $genel_bilgiler['site_adi'] ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase"><?php echo $genel_bilgiler['site_adi'] ?></h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0"><?php echo $genel_bilgiler['email'] ?></h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0"><?php echo $genel_bilgiler['numara'] ?></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.linkedin.com/in/ardau354?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.instagram.com/ardaaafre?igsh=bzlweHY4em1mZGR0">
                                <i class="fab fa-instagram"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase"><?php echo $genel_bilgiler['site_adi'] ?></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == "Anasayfa") ? 'active' : ''; ?>">Anasayfa</a>
                            <a href="hakkımızda.php" class="nav-item nav-link <?php echo ($currentPage == "Hakkımızda") ? 'active' : ''; ?>">Hakkımızda</a>
                            <a href="sınıflar.php" class="nav-item nav-link <?php echo ($currentPage == "Sınıflar") ? 'active' : ''; ?>">Sınıflar</a>
                            <a href="eğitmenler.php" class="nav-item nav-link <?php echo ($currentPage == "Eğitmenler") ? 'active' : ''; ?>">Eğitmenler</a>
                            <div class="nav-item dropdown <?php echo ($isOtherActive) ? 'active' : ''; ?>">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Diğer</a>
                                <div class="dropdown-menu rounded-0 m-0">
        <a href="hareketler.php" class="dropdown-item ">Hareketler</a>
        <a href="yorumlar.php" class="dropdown-item ">Yorumlar</a>
        <a href="rapor.php" class="dropdown-item ">Rapor</a>
    </div>
</div>


                            <a href="iletişim.php" class="nav-item nav-link <?php echo ($currentPage == "İletişim") ? 'active' : ''; ?>">İletişim</a>
                            
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->