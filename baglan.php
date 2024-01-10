<?php
//$conn = mysqli_connect("localhost","root","","arumgym");
$conn = mysqli_connect("localhost","121620211111","x4XVFQeNrNT","db_121620211111");
 /* Bağlantı Kontrolü */
 if ( mysqli_connect_errno() ) {
	 echo "Bağlantı Başarısız. Hata :".mysqli_connect_error();
	 die();
 } else {
	// echo "Bağlantı Başarılı";
 }
 mysqli_query($conn,"SET NAMES 'utf8'");
 //mysqli_close($conn);
 ?>