
<?php
$isOtherActive = true;
include('header.php');
$sorgu_hareketler = mysqli_query($conn,"select * from hareketler");
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
v            <di class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Blog Grid</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Blog </a>
            </di>
        </div>
    </div>
    <!-- Hero End -->
    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5 " id="sonuc">
                
                <?php
                // while($hareket=mysqli_fetch_array($sorgu_hareketler))
                // {
                //     echo '
                //     <div class="col-md-6">
                //     <a href="hareket.php?hareket='.hash('sha256',rand(1,1000)).$hareket['id'].hash('sha256',rand(1,1000)).'">
                //     <div class="blog-item">
                //         <div class="position-relative overflow-hidden rounded-top">
                //             <img class="img-fluid" src="img/'.$hareket['resim'].'" alt="">
                //         </div>
                //         <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                //             <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                
                //                 <h6 class="text-light text-uppercase mb-0">'.$hareket['bolge'].'</h6>
                                
                //             </div>
                //             <a class="h5 text-uppercase text-light" href="">'.$hareket['ad'].'</h4></a>
                //         </div>
                //     </div>
                //     </a>
                // </div>
                // ';
                // }
            ?>
                    
                </div>
            </div>
            <!-- Blog list End -->

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
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script>
    $(".hareket-getir").click(function(e) {

        e.preventDefault();
        var bolge=(this).querySelector("input").value;
        
        $.ajax({
            type: "GET",
            url: "islemler.php",
            data: 'bolge='+bolge+'&islem=hareket', 
            success: function(data)
            {
            $('#sonuc').html(data);
            }
        });
        
    });
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "islemler.php",
            data: 'bolge=tum&islem=hareket', 
            success: function(data)
            {
            $('#sonuc').html(data);
            }
        });
        
    }
        
    )
  
    </script>                
    <?php
include('footer.php')

?>
