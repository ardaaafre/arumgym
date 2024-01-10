<?php
include('baglan.php');
$sorgu_gnl = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu_gnl);
?>
 
 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-6 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">İletişime Geçin</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"><?php echo $genel_bilgiler['konum'] ?></p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0"><?php echo $genel_bilgiler['email'] ?></p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0"><?php echo $genel_bilgiler['numara'] ?></p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.linkedin.com/in/ardau354?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="https://www.instagram.com/ardaaafre?igsh=bzlweHY4em1mZGR0"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Hızlı Linkler</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Anasayfa</a>
                            <a class="text-secondary mb-2" href="hakkımızda.php"><i class="bi bi-arrow-right text-primary me-2"></i>Hakkımızda</a>
                            <a class="text-secondary mb-2" href="sınıflar.php"><i class="bi bi-arrow-right text-primary me-2"></i>Sınıflar</a>
                            <a class="text-secondary mb-2" href="eğitmenler.php"><i class="bi bi-arrow-right text-primary me-2"></i>Eğitmenler</a>
                            <a class="text-secondary mb-2" href="hareketler.php"><i class="bi bi-arrow-right text-primary me-2"></i>Hareketler</a>
                            <a class="text-secondary" href="iletişim.php"><i class="bi bi-arrow-right text-primary me-2"></i>İletişim</a>
                            <a class="text-secondary" href="yorumlar.php"><i class="bi bi-arrow-right text-primary me-2"></i>Yorumlar</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#"><?php echo $genel_bilgiler['site_adi'] ?></a>. Tüm hakları saklıdır.</p>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>