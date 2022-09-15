<?php
// lay thong tin he dieu hanh php dang chay
// strtoupper chuyen chu thuong ve chu hoa
// substr tra ve 1 phan cua chuoi
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'This is a server using Windows!';
} else {
echo 'This is a server not using Windows!'."\n";
}
?>