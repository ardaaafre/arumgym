
<?php
$tum_hareketler = mysqli_query($conn,"select DISTINCT(bolge) from hareketler");
    
?>
<div class="mb-5">
    <h3 class="text-uppercase mb-4">Tüm Hareketler</h3>
    <div class="d-flex flex-column justify-content-start bg-dark rounded p-4">
        <?php 
            while($hareket=mysqli_fetch_array($tum_hareketler))
            {
                echo '<a  class="hareket-getir fs-5 fw-bold text-light text-uppercase mb-2" style="cursor:pointer"><i class="bi bi-arrow-right text-primary me-2"></i><input type="hidden" value="'.$hareket['bolge'].'" />'.$hareket['bolge'].'</a>';
            }
            
        ?>
    </div>
</div>