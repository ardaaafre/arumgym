<?php
$currentPage = "Hakkımızda";
include('header.php')

?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">About Us</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid p-5" id="hedefDiv">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <!-- <h5 class="text-primary text-uppercase">Hakkımızda</h5> -->
                    <h1 class="display-3 text-uppercase mb-0"><?php echo $genel_bilgiler['site_adi']?>'e Hoşgeldiniz</h1>
                </div>
                <h4 class="text-body mb-4"><?php echo $genel_bilgiler['slogon']?></h4>
                <!-- <p class="mb-4">Nonumy erat diam duo labore clita. Sit magna ipsum dolor sed ea duo at ut. Tempor sit lorem sit magna ipsum duo. Sit eos dolor ut sea rebum, diam sea rebum lorem kasd ut ipsum dolor est ipsum. Et stet amet justo amet clita erat, ipsum sed at ipsum eirmod labore lorem.</p> -->
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link  text-center w-100 active" data-bs-toggle="pill" href="#pills-1">Hakkımızda</a>
                        </li>
                        <li class="nav-item w-50">
                                <a class="nav-link text-center w-100" data-bs-toggle="pill" href="#pills-2">Neden Bizi Seçmelisiniz</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0"><?php echo $genel_bilgiler['kisa_bilgi']?></p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0"><?php echo $genel_bilgiler['secilme']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Programe Start -->
    <?php include("components/beyaz_kisim.php") ?> 
    <!-- Programe Start -->


    <!-- Facts Start -->
    <?php include("components/artis_kisim.php") ?>      
    <!-- Facts End -->
    

    <?php
include('footer.php')

?>


   