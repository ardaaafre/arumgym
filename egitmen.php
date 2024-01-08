<?php
include('header.php');
$id=$_GET['egitmen'];
$id = substr($id,64);
$id = substr($id,0,-64);
$sorgu_egitmen = mysqli_query($conn,"select * from egitmenler where id =$id");
$egitmen=mysqli_fetch_array($sorgu_egitmen);
?>

<div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Eğitmenler</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/<?php echo $egitmen['resim'] ?>" alt="">
                    <h1 class="text-uppercase mb-4"><?php echo $egitmen['adi'].' '.$egitmen['soyadi'] ?></h1>
                    <p><?php echo $egitmen['ozgecmis'] ?></p>
                </div>
            </div>
            <div class="col-lg-4">
            <div>
                    <!-- <h3 class="text-uppercase mb-4">Plain Text</h3> -->
                    <div class="bg-dark rounded text-center text-light" style="padding: 30px;">
                        <p>Hayatınızda spor yapmak sadece fiziksel sağlığınızı geliştirmekle kalmaz, aynı zamanda zihinsel ve duygusal iyilik hali için de dönüşüme kapı aralar. Spor, sadece bir aktivite değil, aynı zamanda yaşam tarzınızın bir parçası olabilir. Her bir hareket, sadece vücudunuzun gücünü artırmakla kalmaz, aynı zamanda motivasyonunuzu yükseltir ve ruhsal sağlığınıza olumlu bir katkıda bulunur. Spor, sizi sadece fiziksel olarak değil, aynı zamanda zihinsel olarak da güçlendirir. Hedefler koyduğunuzda ve bu hedeflere ulaşmak için çaba harcadığınızda, kendi potansiyelinizi keşfetme ve aşma şansına sahip olursunuz.</p>
                        <a href="eğitmenler.php" class="btn btn-primary py-2 px-4">Tüm Eğitmenler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include('footer.php')

?>