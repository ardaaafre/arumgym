<?php
include('header.php');
$id=$_GET['hareket'];
$id = substr($id,64);
$id = substr($id,0,-64);
$sorgu_hareket = mysqli_query($conn,"select * from hareketler where id =$id");
$hareket=mysqli_fetch_array($sorgu_hareket);
?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Blog Detail</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Detail</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/<?php echo $hareket['resim'] ?>" alt="">
                    <h1 class="text-uppercase mb-4"><?php echo $hareket['ad'] ?></h1>
                    <p><?php echo $hareket['aciklama'] ?></p>
                    
                </div>
                <!-- Blog Detail End -->

                

                
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                

                <!-- Category Start -->
                <?php include("components/tüm hareketler.php") ?>  
                <!-- Category End -->

               

                <!-- Plain Text Start -->
                <?php include("components/motivasyon sözü.php") ?> 
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

    <?php
include('footer.php')

?>