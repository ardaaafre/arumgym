<div class="container-fluid bg-dark facts p-5 my-5">
    <div class="row gx-5 gy-4 py-5">
                    <?php 
                    $sorgu_artis = mysqli_query($conn,"select * from artan_kisim");

                        while($artis=mysqli_fetch_array($sorgu_artis))
                        {
                            echo '
                            
                                <div class="col-lg col-md">
                                    <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-star fs-4 text-white"></i>
                            </div>
                            <div class="ps-4 mr-12">
                                <h5 class="text-secondary text-uppercase">'.$artis['isim'].'</h5>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">'.$artis['sayide'].'</h1>
                            </div>
                            </div>
            </div>';
                        }
                    ?>
                    </div>
             </div> 