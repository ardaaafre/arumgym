<?php
include_once('baglan.php');
$sorgu_gnl = mysqli_query($conn,"select * from gunler");
$sorgu_siniflar = mysqli_query($conn,"SELECT s.id,s.egitmen_id,s.gun_id,s.sinif_turu,s.ders_saati,e.adi,e.soyadi,e.resim,e.ozgecmis,g.gunler FROM siniflar as s join egitmenler as e on s.egitmen_id=e.id join gunler as g on g.gun_sayisi=s.gun_id ORDER BY gun_id");
?> 
 
 <!-- Class Timetable Start -->
 <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Sınıf Programı</h5>
            <h1 class="display-3 text-uppercase mb-0">Çalışma Saatleri</h1>
        </div>
        <div class="tab-class text-center">
   
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <?php

                    while($gunler=mysqli_fetch_array($sorgu_gnl))
                    {
                        echo '<li class="nav-item">
                                <a class="nav-link rounded-pill text-white " data-bs-toggle="pill" href="#tab-'.$gunler[0].'">'.$gunler[1].'</a>
                            </li>';
                    }
                    
                ?>
            </ul>
            <div class="tab-content">
            <?php
                    for($i=1;$i<=7;$i++)
                    {
                        $sorgu_siniflar = mysqli_query($conn,"SELECT s.id,s.egitmen_id,s.gun_id,s.sinif_turu,s.ders_saati,e.adi,e.soyadi,e.resim,e.ozgecmis,g.gunler FROM siniflar as s join egitmenler as e on s.egitmen_id=e.id join gunler as g on g.gun_sayisi=s.gun_id where gun_id=".$i);
                        echo '
                        <div id="tab-'.$i.'" class="tab-pane fade show p-0">
                            <div class="row g-5">
                                ';
                    
                        while($sinif=mysqli_fetch_array($sorgu_siniflar))
                        {
                            echo '                     
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="bg-dark rounded text-center py-5 px-3">
                                            <h6 class="text-uppercase text-light mb-3">'.$sinif['ders_saati'].'</h6>
                                            <h5 class="text-uppercase text-primary">'.$sinif['sinif_turu'].'</h5>
                                            <p class="text-uppercase text-secondary mb-0">'.$sinif['adi'].' '.$sinif['soyadi'].'</p>
                                        </div>
                                    </div>
                            ';
                        }
                    
                        echo '
                            </div>
                        </div>
                        ';
                    }

                    ?>
               
            </div>
        </div>
    </div>
    <!-- Class Timetable Start -->