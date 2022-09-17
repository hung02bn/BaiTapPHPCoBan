<!DOCTYPE html>
<html>
    <head>
        <title>Bài 55</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 55</h1>
        <!-- Viết một chương trình PHP chấp nhận sáu số làm đầu vào và sắp xếp chúng theo thứ tự giảm dần -->
        <?php
            $nums = array (1,3,41,2,123,113);
            echo "Input:";
            foreach( $nums as $values) {
                echo " $values";
            }
            rsort($nums);
            echo "<br/> After sorting the said integers: ";
            foreach( $nums as $values) {
                echo " $values";
            }
        ?>
    </body>
</html>