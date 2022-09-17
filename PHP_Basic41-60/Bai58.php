<!DOCTYPE html>
<html>
    <head>
        <title>Bài 58</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 58</h1>
        <!-- Có hai đường tròn C1 với bán kính r1, tọa độ trung tâm (x1, y1) và C2 với bán kính r2 và tọa độ trung tâm (x2, y2) 
        Viết một chương trình PHP để kiểm tra những điều sau:
        "C2 trong C1" nếu C2 trong C1
        "C1 trong C2" nếu C1 trong C2
        "C1 và C2 cắt nhau" nếu C1 và C2 cắt nhau, và
        "C1 và C2 không trùng nhau" nếu C1 và C2 không trùng nhau. -->
            <?php
                $xa = 0; $ya = 0; $ra = 6; $xb= 0; $yb = 0; $rb =5;
                $r = sqrt(($xb - $xa)*($xb - $xa) + ($yb - $ya)*($yb - $ya));
                if($r + $ra < $rb){
                    echo "C1  trong  C2 <br/>";
                }
                if($r + $rb < $ra){
                    echo "C2  trong C1 <br/>";
                }
                 
                if($r <= $ra + $rb){
                    echo "C1 và C2 cắt nhau<br/>";
                }
                echo "C1 và C2 không trùng nhau <br/>";
            ?>
    </body>
</html>