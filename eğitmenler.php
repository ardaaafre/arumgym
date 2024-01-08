<?php
$currentPage = "Eğitmenler";
include('header.php');
$sorgu_egtm = mysqli_query($conn,"select * from egitmenler");
?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Eğitmenler</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Takım</h5>
            <h1 class="display-3 text-uppercase mb-0">Uzman Eğitmenler</h1>
        </div>
        <div class="row g-5">
            <?php
                while($egitmen=mysqli_fetch_array($sorgu_egtm))
                {
                    echo '<div class="col-lg-4 col-md-6" style="height: 400px!important; weight: 400px!important; ">
                
                    <a href="egitmen.php?egitmen='.hash('sha256',rand(1,1000)).$egitmen['id'].hash('sha256',rand(1,1000)).'">
                    <div class="team-item position-relative">
                       <div class="position-relative overflow-hidden rounded">
                           <img class="img-fluid w-100" src="img/'.$egitmen['resim'].'" alt="">
                           
                       </div>
                       <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                       <h5 class="text-uppercase text-light">'.$egitmen['adi'].' '.$egitmen['soyadi'].'</h5></a>
                           
                       </div>
                   </div> </a>
               </div>';
                }
            ?>
        </div>
    </div>
    <!-- Team End -->
    

    <?php
include('footer.php')

?>