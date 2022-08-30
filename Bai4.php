<?php
function kiem_tra_snt($n){
    if($n < 2){
        return false;
    }
    $squareRoot = sqrt($n);
    for($i = 2; $i <= $squareRoot; $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
$n = 20;
echo "So nguyen to nho hon " . $n . " la:<br>";
for($i = 0; $i < $n; $i++){
    if(kiem_tra_snt($i)){
        echo ("$i" . " ");
    }
}
?>