<!DOCTYPE html>
<html>
    <head>
        <title>Bài 60</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 60</h1>
        <!-- Viết một chương trình PHP để in các mode value từ một dãy số nguyên cho trước
            mode value là số lặp lại thường xuyên nhất. Nếu có một số mode value, hãy in chúng theo thứ tự tăng dần. -->
        <?php
            $hoge=array(7,7,8,85,85);
            while($hoge[]=trim(fgets(fopen('php://stdin', 'r'))));{}
            $hage=array_count_values($hoge);
            $max = max($hage);
            $koge= array_keys($hage,$max);
            echo "Mode values (in ascending order):\n";
            sort($koge,SORT_ASC);
            foreach ($koge as $val) {
                echo $val.PHP_EOL;
            }
        ?>
    </body>
</html>