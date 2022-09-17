<!DOCTYPE html>
<html>
    <head>
        <title>Bài 57</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 57</h1>
        <!-- Viết một chương trình PHP để tìm tổng lớn nhất của một dãy con liền kề từ một dãy số a1, a2, a3, ... an. Một dãy con có một phần tử cũng là một dãy con liên tục. -->
            <?php
                function Bai57($x){
                    $sum =0;
                    echo '<br/>List: '.trim($x).'<br/>';
                    $a = explode(' ',trim($x));
                    foreach( $a as $Values)
                        $sum += $Values;
                    echo "Tổng = $sum <br/>";
                }
                Bai57("1 0 -3 2 -2 2 0 0");
                Bai57("4 3 -10 7 14 5 8 10");
            ?>
    </body>
</html>