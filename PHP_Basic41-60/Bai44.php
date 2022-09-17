<!DOCTYPE html>
<html>
    <head>
        <title>Bài 44</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 44</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình tổng các cặp số của một mảng các số nguyên dương đã được sắp xếp cho trước bằng một số nhất định -->
        <?php
            function find_Pairs($nums, $pair_sum) {
                echo '<br/> Số cho trước: '.$pair_sum;
                $nums_pairs = "";
                for ($i = 0; $i <= count($nums); $i++) {
                    for ($j = $i + 1; $j < count($nums); $j++) {
                        if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
                        $nums_pairs .= " (".$nums[$i] . "," . $nums[$j] . ") ; ";
                        }
                    }
                }
                echo '<br/> Kết quả :';
                return $nums_pairs;
            }
            $nums = array(0,1,2,3,4,5,6);
            echo 'Mảng nguyên dương đã được sắp xếp :';
            foreach( $nums as $value ) {
                echo " $value ";               
            }
            echo find_Pairs($nums, 7)."<br/>";
            echo find_Pairs($nums, 5)."<br/>";
        ?>
    </body>
</html>