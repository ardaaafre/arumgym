<?php
$currentPage = "Sınıflar";
include('header.php')
?>
 <!-- <?php
$sorgu_gnl = mysqli_query($conn,"select * from gunler");
$sorgu_siniflar = mysqli_query($conn,"SELECT s.id,s.egitmen_id,s.gun_id,s.sinif_turu,s.ders_saati,e.adi,e.soyadi,e.resim,e.ozgecmis,g.gunler FROM siniflar as s join egitmenler as e on s.egitmen_id=e.id join gunler as g on g.gun_sayisi=s.gun_id ORDER BY gun_id");
?>   -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Classes</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Classes</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Class Timetable Start -->
    <?php include("components/saatler.php") ?>
    <!-- Class Timetable Start -->
    

    <?php
include('footer.php')

?>