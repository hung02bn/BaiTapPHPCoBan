<!DOCTYPE html>
<html>
    <head>
        <title>Bài 41</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 41</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình bảng phép nhân 6*6 -->
        <?php
            for ($i = 1; $i < 7; $i++) {
              for ($j = 1; $j < 7; $j++) {
                 if ($j == 1) {
                   echo str_pad($i*$j, 2, '  ', STR_PAD_LEFT);
                 } else {
                   echo str_pad($i*$j, 4, '  ', STR_PAD_LEFT);
                 }
              }
              echo '<br/>';
            } 
        ?>
    </body>
</html>