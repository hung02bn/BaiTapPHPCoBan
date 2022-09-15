<?php
    function kiemtra($n){
        if($n > 30)
            echo "$n lon hon 30\n".'<br/>';
        elseif($n > 20)
            echo "$n lon hon 20\n".'<br/>';
        elseif($n > 10)
            echo "$n lon hon 10\n".'<br/>';
        else
            echo "$n nho hon 10\n".'<br/>';
    }
    kiemtra(45);
    kiemtra(4);
    kiemtra(15);
    kiemtra(23);
?>