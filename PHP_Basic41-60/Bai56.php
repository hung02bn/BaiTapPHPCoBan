<!DOCTYPE html>
<html>
    <head>
        <title>Bài 56</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 56</h1>
        <!-- Viết chương trình PHP để kiểm tra xem hai đường thẳng PQ và RS có song song với nhau hay không.
            Bốn điểm là P (x1, y1), Q (x2, y2), R (x3, y3), S (x4, y4). -->
            <?php
                function Bai56($x1, $y1,$x2, $y2, $x3, $y3, $x4, $y4){
                    $pq = INF;
                    if ($x2 - $x1 !== 0.0) {
                        $pq = ($y2 - $y1) / ($x2 - $x1);
                    }
                    $rs = INF;
                    if ($x4 - $x3 !== 0.0) {
                        $rs = ($y4 - $y3) / ($x4 - $x3);
                    }
                    echo "<br/>P($x1, $y1), Q($x2, $y2), R($x3, $y3), S($x4, $y4).<br/>";
                    echo $pq === $rs ? 'PQ and RS are parallel.<br/>' : 'PQ and RS are not parallel.<br/>';
                }
                Bai56(1,0,3,2,2,2,0,0);
                Bai56(4,3,10,7,14,5,8,10);
            ?>
    </body>
</html>