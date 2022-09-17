<!DOCTYPE html>
<html>
    <head>
        <title>Bài 59</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 59</h1>
        <!-- Viết một chương trình PHP để đọc một ngày (từ 2004/1/1 đến 2004/12/31) và in ngày của ngày đó. Ngày 1 tháng 1 năm 2004, là Thứ Sáu. Lưu ý rằng năm 2004 là một năm nhuận.
Hai số nguyên m và d cách nhau một khoảng trắng trên dòng, m, d biểu thị tháng và ngày.. -->
        <?php
        $days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');
        $format = explode(',', 'Wednesday,Thursday,Friday,Saturday,Sunday,Monday,Tuesday');
            $line = '14 9';
            sscanf($line, '%d %d', $d, $m);
            if ($m === 0) {
                echo "Lỗi!!";
            }
            $n = $days[$m - 1] + $d;
            $today = $format[$n % 7];
            echo "The $d $m is: ".$today;
        ?>
    </body>
</html>