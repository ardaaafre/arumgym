<?php
include('baglan.php');
$islem = $_GET['islem'];
if ( $islem == 'iletisim'  ) {	
    $ip = $_SERVER['REMOTE_ADDR'];
    $ad_soyad = mysqli_real_escape_string($conn,@$_GET['ad_soyad']);
    $tel = mysqli_real_escape_string($conn,@$_GET['tel']);
    $mail = mysqli_real_escape_string($conn,@$_GET['mail']);
    $mesaj = mysqli_real_escape_string($conn,@$_GET['mesaj']);
    
$sql = "insert into iletisim_mesajlari( ad_soyad, tel, mail, mesaj, ip) values ('$ad_soyad', '$tel', '$mail', '$mesaj', '$ip' )";

    if (mysqli_query($conn,$sql)) {
        echo "<center><img src='images/ok.png' width=96><br>Teşekkürler<p>";
        echo "Mesajınız Gönderildi</center>";
    } else{ echo "Beklenmeyen bir hata oluştu.";
            
    }
}elseif($islem=="hareket"){
    $bolge = mysqli_real_escape_string($conn,@$_GET['bolge']);
    if($bolge=="tum")
    {
        $hareketler = mysqli_query($conn,"select * from hareketler");
        while($hareket=mysqli_fetch_array($hareketler))
        {
            echo '
            <div class="col-md-6">
            <a href="hareket.php?hareket='.hash('sha256',rand(1,1000)).$hareket['id'].hash('sha256',rand(1,1000)).'">
            <div class="blog-item">
                <div class="position-relative overflow-hidden rounded-top">
                    <img class="img-fluid" src="img/'.$hareket['resim'].'" alt="">
                </div>
                <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                    <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                        
                        <h6 class="text-light text-uppercase mb-0">'.$hareket['bolge'].'</h6>
                        
                    </div>
                    <a class="h5 text-uppercase text-light" href="hareket.php?hareket='.hash('sha256',rand(1,1000)).$hareket['id'].hash('sha256',rand(1,1000)).'">'.$hareket['ad'].'</h4></a>
                </div>
            </div>
            </a>
        </div>
        ';
        }
    }
    else{
        $hareketler = mysqli_query($conn,"select * from hareketler where bolge='$bolge' ");
   
        while($hareket=mysqli_fetch_array($hareketler))
        {
            echo '
            <div class="col-md-6">
            <a href="hareket.php?hareket='.hash('sha256',rand(1,1000)).$hareket['id'].hash('sha256',rand(1,1000)).'">
            <div class="blog-item">
                <div class="position-relative overflow-hidden rounded-top">
                    <img class="img-fluid" src="img/'.$hareket['resim'].'" alt="">
                </div>
                <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                    <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                        
                        <h6 class="text-light text-uppercase mb-0">'.$hareket['bolge'].'</h6>
                        
                    </div>
                    <a class="h5 text-uppercase text-light" href="hareket.php?hareket='.hash('sha256',rand(1,1000)).$hareket['id'].hash('sha256',rand(1,1000)).'">'.$hareket['ad'].'</h4></a>
                </div>
            </div>
            </a>
        </div>
        ';
        }
    }
   
} else {
echo "Geçersiz İstek <br>";
}
?>

