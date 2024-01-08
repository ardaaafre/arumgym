<?php
$currentPage = "Hakkımızda";
include('header.php');
$sql = mysqli_query($conn,'select COUNT(*) as KADIN,(select count(*) from egitmenler where cinsiyet="erkek") as ERKEK from egitmenler where cinsiyet="kadın" ');
$sonuc = mysqli_fetch_array($sql);
$sql2 = mysqli_query($conn,'SELECT bolge, COUNT(*) AS bolge_sayisi FROM hareketler GROUP BY bolge');
$kolon1=[];
$kolon2=[];
while($satir = mysqli_fetch_array($sql2))
{
    array_push($kolon1,$satir[0]);
    array_push($kolon2,$satir[1]);
}
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Hakkımızda</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid p-5" id="hedefDiv">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <!-- <h5 class="text-primary text-uppercase">Hakkımızda</h5> -->
                    <h1 class="display-3 text-uppercase mb-0"><?php echo $genel_bilgiler['site_adi']?>'e Hoşgeldiniz</h1>
                </div>
                <h4 class="text-body mb-4"><?php echo $genel_bilgiler['slogon']?></h4>
                <!-- <p class="mb-4">Nonumy erat diam duo labore clita. Sit magna ipsum dolor sed ea duo at ut. Tempor sit lorem sit magna ipsum duo. Sit eos dolor ut sea rebum, diam sea rebum lorem kasd ut ipsum dolor est ipsum. Et stet amet justo amet clita erat, ipsum sed at ipsum eirmod labore lorem.</p> -->
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link  text-center w-100 active" data-bs-toggle="pill" href="#pills-1">Hakkımızda</a>
                        </li>
                        <li class="nav-item w-50">
                                <a class="nav-link text-center w-100" data-bs-toggle="pill" href="#pills-2">Neden Bizi Seçmelisiniz</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0"><?php echo $genel_bilgiler['kisa_bilgi']?></p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0"><?php echo $genel_bilgiler['secilme']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="d-flex justify-content-center mt-5">	  
			<div style='width:400px;height:400px'><canvas id="grafik1"></canvas></div>
      </div>
      <div class="d-flex justify-content-center mt-5">	  
			<div style='width:400px;height:400px'><canvas id="grafik2"></canvas></div>
      </div>
    <!-- Programe Start -->
    <?php include("components/beyaz_kisim.php") ?> 
    <!-- Programe Start -->


    <!-- Facts Start -->
    <?php include("components/artis_kisim.php") ?>      
    <!-- Facts End -->


    
    
    <script>
        new Chart(document.getElementById("grafik1"), {
            type: 'pie',
            data: {
            labels: ["Erkek", "Kadın"],
            datasets: [{
                label: " Eğitmen Sayısı",
                backgroundColor: ["#2a9d8f", "#f4a261"],
                data: [<?php echo $sonuc["ERKEK"] ?>,<?php echo $sonuc["KADIN"] ?>]
            }]
            },
            options: {
            responsive: true,
            animation : false,
            mainAspectRatio: false,
            plugins: {
            legend: {
                position: 'top',
            }
            }
        },
        });
    </script>
    <script>
        new Chart(document.getElementById("grafik2"), {
            type: 'pie',
            data: {
            labels: [
                <?php
                    foreach ($kolon1 as $bolgeAdi) {
                        echo '"'.$bolgeAdi .'" ,';
                    }
                    ?>
                ],
            datasets: [{
                label: " Hareket Sayısı ",
                //backgroundColor:["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#a8d5e2", "#f9a620","#ffd449","#548c2f","#104911","red","purple"],
                backgroundColor:[<?php
                     
                     foreach ($kolon2 as $hareketAdedi) {
                        $color = sprintf("#%06X", mt_rand(0, 0xFFFFFF));
                        echo '"'.$color .'" ,';
                    }
                ?>],
                data: [
                <?php
                    foreach ($kolon2 as $hareketAdedi) {
                        echo $hareketAdedi . ',';
                    }
                    ?>
                ]
            }]
            },
            options: {
            responsive: true,
            animation : false,
            mainAspectRatio: false,
            plugins: {
            legend: {
                position: 'top',
            }
            }
        },
        });
    </script>
    <?php
include('footer.php')

?>


   