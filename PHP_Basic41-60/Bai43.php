<!DOCTYPE html>
<html>
    <head>
        <title>Bài 43</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 43</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình kết quả nhân các phần tử của 2 danh sách -->
        <?php
            function nhan2danhsach($x, $y)
            {
                echo 'List 1: '.trim($x).'<br/>';
                echo 'List 2: '.trim($y).'<br/>';
                $a = explode(' ',trim($x));
                $b = explode(' ',trim($y));
                foreach($a as $key=>$value){
                    $output[$key] = $a[$key]*$b[$key];
                }
                return implode(' ',$output);
            }
            echo 'Kết quả: '.nhan2danhsach(("10 12 3"), ("1 3 3")).'<br/>';
        ?>
    </body>
</html>