<?php
// tempnam tao tep voi ten tep duy nhat
// sys_get_temp_dir() tra ve duong dan duoc su dung cho cac tep tam thoi
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";
?>