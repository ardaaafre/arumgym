<?php
include('header.php');
?>
<div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">rapor</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
                <a href="hareketler.php" class="btn btn-primary py-md-3 px-md-5 me-3">hareketler</a>
                <a href="yorumlar.php" class="btn btn-primary py-md-3 px-md-5 me-3">yorumlar</a>
            </div>
        </div>
    </div>
<div class="container-fluid p-5" id="hedefDiv">
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="mb-4">
                    <h1 class="display-3 text-uppercase mb-0"><?php echo $genel_bilgiler['site_adi']?> Proje Raporu</h1>
                </div>
                <h4 class="text-body mb-4"> <br> Projede Front-End için hazır bir şablon kullanılarak spor salonu içerik sistemi planlanmıştır. Salonda yer alan eğitmen bilgileri,hareket bilgileri,ders sınıfları,yorumlar,spor salonu istatistikleri ve iletişim sayfamızı veri tabanı bilgilerinden çekerek kullanıcılara uygun biçimde gösterilmektedir. Dersin devamında sistem kullanıcı üyelikli hale getirilecek spor salonlarında kullanılabilecek forma dönüştürülecektir. <br>Projenin yapımında kullanılan araçlar : <br>   <br>
                <ul style="font-size: 18px;">
			<li>PHP, HTML5</li>			
			<li><a target='_blank' href='https://www.free-css.com/free-css-templates/page285/gymster'>Free-css Orjinal Template</a></li>
			<li>MySql</li>
			<li>Jquery</li>
			<li>Ajax</li>
			<li><a target='_blank' href='https://www.chartjs.org/'>ChartJs</a></li>
		</ul>
        Proje veritabanı diyagramı : </h4>
        <img src="img/diagram model.png" style="width:80%">
            </div>
        </div>
    </div>




    <?php
   include('footer.php')
   ?>    