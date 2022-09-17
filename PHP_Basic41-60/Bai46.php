<!DOCTYPE html>
<html>
    <head>
        <title>Bài 46</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 46</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình chiều cao 3 tòa nhà cao nhất sắp xếp giảm dần trong số 8 tòa nhà cho trước -->
        <?php
            $heights = array(25,19,23,45,18,23,24,19);
            echo 'Mảng chiều cao các tòa nhà :';
            foreach( $heights as $value ) {
                echo " $value ";               
            }
            while($line = fgets(fopen('php://stdin','r'))) {
                rtrim($line, "\n");
                array_push($heights, (int)$line);
            }
            rsort($heights);
            print("<br/> Chiều cao 3 tòa nhà cao nhất:<br/>");
            echo $heights[0]."<br/>";
            echo $heights[1]."<br/>";
            echo $heights[2]."<br/>";
        ?>
    </body>
</html>