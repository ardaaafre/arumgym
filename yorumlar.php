<?php
$isOtherActive = true;
include('header.php');
$sorgu_yrm = mysqli_query($conn,"select * from yorumlar");
?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Testimonial</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Testimonial</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Testimonial Start -->
    <div class="container-fluid p-0" style="margin: 90px 0;">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 bg-dark p-5">
                <div class="mb-5">
                    <!-- <h5 class="text-primary text-uppercase">Testimonial</h5> -->
                    <h5 class="display-3  text-primary mb-0">Üyelerimizin Yorumları</h5>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php 
                        while($yorumcu=mysqli_fetch_array($sorgu_yrm))
                        {
                            echo '<div class="testimonial-item">
                            <p class="fs-4 fw-normal text-uppercase text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>'.$yorumcu['yorum'].'</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded-circle" src="img/'.$yorumcu['resim'].'" alt="">
                                <div class="ps-4">
                                    <h5 class="text-uppercase text-light">'.$yorumcu['isim'].' '.$yorumcu['soyadi'].'</h5>
                                    <span class="text-uppercase text-secondary">'.$yorumcu['is'].'</span>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>
                    <!-- <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Client Name</h5>
                                <span class="text-uppercase text-secondary">Profession</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    

    <?php
include('footer.php')

?>