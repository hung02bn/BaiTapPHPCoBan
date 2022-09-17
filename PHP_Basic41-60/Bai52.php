<!DOCTYPE html>
<html>
    <head>
        <title>Bài 52</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 52</h1>
        <!-- Viết chương trình PHP để in ra một số các số nguyên tố nhỏ hơn hoặc bằng một số nguyên cho trước. -->
        <?php
            $a = array_fill(0, 1000000, true);
            $a[0] = $a[1] = false;
            
            for($i = 2; $i * $i < 1000000; $i++){
                if(!$a[$i]) continue;
                for($j = $i * $i; $j < 1000000; $j += $i){
                    $a[$j] = false;
                }
            }
            
            $sum = array_fill(0, 1000000, 0);
            
            for($i = 1; $i < 1000000; $i++){
                $sum[$i] += $sum[$i - 1];
                if($a[$i]) $sum[$i]++;
            }
            
            $n = 510;
            echo "Number of prime numbers which are less than or equal to $n is: ";
            echo $sum[$n] . "<br/>";
        ?>
    </body>
</html>