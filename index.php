<?php
include('header.php')
?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Gym Center</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With Gymster</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Gym Center</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength With Our Trainers</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid p-5">
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
                                <a class="nav-link  text-center w-100" data-bs-toggle="pill" href="#pills-2">Neden Bizi Seçmelisiniz</a>
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
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-six-pack display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Body Building</h3>
                    <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-barbell display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Weight Lefting</h3>
                    <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-bodybuilding display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Muscle Building</h3>
                    <p>Sed amet tempor amet sit kasd sea lorem dolor ipsum elitr dolor amet kasd elitr duo vero amet amet stet</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">30% Discount For This Summer</h1>
                <a href="" class="btn btn-primary py-3 px-5">Become A Member</a>
            </div>
        </div>
    </div>
    <!-- Programe Start -->


    <!-- Class Timetable Start -->
    <?php include("components/saatler.php") ?>              
    <!-- Class Timetable Start -->
    

    <!-- Facts Start -->
    
    <?php include("components/artis_kisim.php") ?>      
            <!-- <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Our Trainers</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Complete Project</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-mug-hot fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">The Team</h5>
            <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">John Deo</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">James Taylor</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">Adam Phillips</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    

    <?php include("components/yorum.php") ?>  


    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Our Blog</h5>
            <h1 class="display-3 text-uppercase mb-0">Latest Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <?php
// $_GET süper global değişkeni üzerinden sayfa parametresini al
$sayfa_param = @$_GET['sayfa'];

// sayfa parametresi var mı kontrol et
if (isset($sayfa_param)) {
    echo "Sayfa Parametresi: " . $sayfa_param;
} else {
    echo "Sayfa parametresi belirtilmemiş.";
}
?>

    

   <?php
   include('footer.php')
   ?>