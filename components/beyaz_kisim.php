<div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
        <?php
                $sorgu_beyaz = mysqli_query($conn,"select * from beyaz_kisim");
                while($byz_ksm=mysqli_fetch_array($sorgu_beyaz))
                {
                    echo '<div class="col-lg-4 col-md-6">
                    <div class="bg-light rounded text-center p-5">
                        <img class="img-fluid w-10" src="img/'.$byz_ksm['resim'].'" alt="">
                        <h3 class="text-uppercase my-4">'.$byz_ksm['baslik'].'</h3>
                        <p>'.$byz_ksm['aciklama'].'</p>
                        
                    </div>
                </div>';
                }
            ?>
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">Bu Yaz İçin 30% İndirim</h1>
                <a href="iletişim.php" class="btn btn-primary py-3 px-5">Üye Olun</a>
            </div>
        </div>
    </div>