<!DOCTYPE html>
<html>
    <head>
        <title>Bài 35</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 35</h1>
        <?php
            function XoaPhanTuTrung($list1) {
                $nums_unique = array_values(array_unique($list1));
                return $nums_unique ;
            }
            $nums = array(1,1,2,2,3,4,5,5);
            print_r(XoaPhanTuTrung($nums));
        ?> 
    </body>
</html>