
<?php
$isOtherActive = true;
include('header.php');
$sorgu_hareketler = mysqli_query($conn,"select * from hareketler");
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
v            <di class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">hareketler</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
                <a href="yorumlar.php" class="btn btn-light py-md-3 px-md-5">yorumlar</a>
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
                    
                </div>
                <a href=""></a>
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
