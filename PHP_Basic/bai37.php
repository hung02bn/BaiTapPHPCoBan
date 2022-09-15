<!DOCTYPE html>
<html>
    <head>
        <title>Bài 37</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 37</h1> 
        <?php
            $primes = array();
            $is_prime_no = false;
            for ($i = 2; $i<100; $i++) {
                $is_prime_no = true; 
                for ($j = 2; $j<=($i/2); $j++) {
                    if ($i%$j==0) {
                        $is_prime_no = false;
                        break;
                    }
                }
                if ($is_prime_no) {
                    array_push($primes,$i);
                }
                if (count($primes)==100) {
                    break;
                }
            }
            echo 'Tổng các số nguyên tố nhỏ hơn 100 là: '.array_sum($primes)."\n";
        ?>
    </body>
</html>