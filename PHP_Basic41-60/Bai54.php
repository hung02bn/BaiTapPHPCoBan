
<!DOCTYPE html>
<html>
    <head>
        <title>Bài 54</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 54</h1>
        <!-- Viết một chương trình PHP để tính và in ra tổng của hai số nguyên đã cho (>=0).
        Nếu số nguyên đã cho hoặc tổng có nhiều hơn 80 chữ số, hãy in "overflow". -->
        <?php
            function Bai54($a, $b){
                $ketqua = "";
                $overflow = 80;
                if(strlen($a) > $overflow || strlen($b) > $overflow || strlen($a + $b) > $overflow)
                {
                    return $ketqua .= "Overflow!!";
                }
                else return $ketqua .= "Tổng $a và $b bằng ".$a+$b;
            }
        ?>
        <form action="" method="POST">
            <label for="a_number">Nhập a:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="a_number">Nhập b:</label><br>
            <input type="text" name="b" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["a"])&&isset($_POST["b"]))
                echo Bai54($_POST["a"],$_POST["b"])."<br/>";
        ?> 
    </body>
</html>