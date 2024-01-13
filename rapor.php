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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Detaylar
</button> <br> <br>
        Proje veritabanı diyagramı : </h4>
        <img src="img/diagram model.png" style="width:80%">
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Rapor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-fluid p-5" id="hedefDiv">
        <div class="row gx-5">
            <div class="col-lg-12">
           
                 <ul>
   
                 <li>***</li>  <br> <h4 class="text-body mb-4"> <br>   <br>
                 <li>Anasayfa</li>  <br> <h4 class="text-body mb-4"> Burada ki sınıflar kısmı sayfayı açtığınız güne göre özel olarak açılır yani siteyi hangi gün incelerseniz ilk o günü görürsünüz.Ayrıca sayfanın aşağılarında bulunan "son eklenen hareketler" ve "uzman eğitmenler kısmı" her yüklediğinizde random olarak 3 adet çekilir <br>   <br>
		<li>Hakkımızda</li>  <br> <h4 class="text-body mb-4"> Burada gördüğünüz grafikler "hareketler" ve "eğitmenler" sayfalarında bulunan "bölge" ve "eğitmen" sayısından çekilmiştir   <br>   <br>

			<li>Sınıflar</li>  <br> <h4 class="text-body mb-4"> Burada ki sınıflar kısmı sayfayı açtığınız güne göre özel olarak açılır yani siteyi hangi gün incelerseniz ilk o günü görürsünüz.Ayrıca isterseniz diğer günlerdeki bilgileride görebilirsiniz.  <br>   <br>

			<li>Eğitmenler</li>  <br> <h4 class="text-body mb-4"> Burada ki bilgiler "eğitmenler" tablosundan çekilir ve istenirse o eğitmenlere tıklayarak özgeçmişlerine ulaşılabilir.  <br>   <br>

			<li>Hareketler</li>  <br> <h4 class="text-body mb-4"> Bu sayfamızda da veri tabanından çekilen spor hareketlerimiz var yanda gördüğümüz karttanda çalışmak istediğiniz bölgeyi filtreleyebilirsiniz (burada ajax kullanılmıştır). Ayrıca her bir harekete tıklayarak onunla ilgili bilgi alabilirsiniz  <br>   <br>

			<li>Yorumlar</li>  <br> <h4 class="text-body mb-4"> Burada her bir yorum veri tabanında çekilir ikinci dönem bu kısım dinamik hale getirilecektir. Hali hazırda bulunan yorumlar mizah amaçlı yazılmıştır.  <br>   <br>
      <li>İletişim</li>  <br> <h4 class="text-body mb-4"> Bu sayfada bulunan bilgiler (mail adresi, telefon,konum) veri tabanından çekilmiştir. Mesaj kutusunda da ajax kullanılmıştır.  <br>   <br>
      </ul>
     <br> <br>
        
            </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>



    <?php
   include('footer.php')
   ?>    