<?php
function tinh_giai_thua($n){
    $giai_thua = 1;
    if($n == 0 || $n == 1)
        return $giai_thua;
    else{
        for($i =2; $i <= $n; $i++){
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
$n = 5;
echo "Giai thua cua ". $n." la: " . tinh_giai_thua($n) . "\n";