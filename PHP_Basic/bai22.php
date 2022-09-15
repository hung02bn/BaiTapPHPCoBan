<?php
// HTTP_HOST: tra ve may chu luu tru hien tai
// REQUEST_URI: uri duoc cung cap de truy cap trang nay
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
?>