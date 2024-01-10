<?php
$currentPage = "İletişim";
include('header.php')
?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">iletişim</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Bize Ulaşın</h5>
            <h1 class="display-3 text-uppercase mb-0">İLETİŞİME GEÇİN</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Konumumuz</h5>
                    <p class="text-secondary mb-0"><?php echo $genel_bilgiler['konum'] ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">E-posta Adresimiz</h5>
                    <p class="text-secondary mb-0"><?php echo $genel_bilgiler['email'] ?></p> <br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Numara</h5>
                    <p class="text-secondary mb-0"><?php echo $genel_bilgiler['numara'] ?></p> <br>
                </div>
            </div>
        </div>
        <div class="row g-0 gizle">
            <div class="col-lg-6">
                <div class="bg-dark p-5">
                  <form id='iletisim_formu' action="islemler.php" >
                        <div class="row g-3">
                            <div class="col-6">
                                <input name="ad_soyad" type="text" required class="form-control bg-light border-0 px-4" placeholder="İsim-Soyisim" style="height: 55px;">
                            </div>
                            <div class="col-6">
                                <input name="mail" type="email" required class="form-control bg-light border-0 px-4" placeholder="E-posta" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input name="tel" type="text" required pattern="[0-9]{11}" class="form-control bg-light border-0 px-4" placeholder="Tel" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="mesaj" required class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="Mesaj"></textarea>
                            </div>
                            <div class="col-6">  
                            <button class="btn btn-primary w-100 py-3" type="submit">Mesajı Gönder</button>
                            </div>
                            <div class="col-6">
                            <button class="btn btn-primary w-100 py-3" type="reset">Mesajı Sil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
            <div class="col-lg">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3755595793077!2d30.479029233111945!3d39.78129488858804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc1686e461c6d3%3A0xf8fe95d738fb71a3!2zR8O8bmTDvHphbHAgR1NCIMOWxJ9yZW5jaSBZdXJkdQ!5e0!3m2!1str!2str!4v1703420489056!5m2!1str!2str"
                    frameborder="0" style="height: 457px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <section class="contact_section layout_padding-bottom">
    <div class="container ">

      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              
			  <div id='sonuc' style='margin: auto;'>  </div> 
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script>
  $("#iletisim_formu").submit(function(e) {

    e.preventDefault();
    var form = $(this);
    var actionUrl = form.attr('action');
    
    $.ajax({
        type: "GET",
        url: actionUrl,
        data: form.serialize() + '&islem=iletisim', 
        success: function(data)
        {
          $('#sonuc').html(data);
		  $('.contact-form').hide(); 
      $('.gizle').hide();
        }
    });
    
});
</script>
   
    <?php
include('footer.php')
?>