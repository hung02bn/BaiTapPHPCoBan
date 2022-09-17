<!DOCTYPE html>
<html>
    <head>
        <title>Bài 48</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 48</h1>
        <!-- Viết 1 chương trình PHP kiểm tra tam giác vuông hay không? nếu có thì hiển thị "YES" con không thì hiển thị "NO" -->
        <?php
            function CheckTamGiacVuong($a,$b,$c){
                $ketqua ="";
                $a *= $a;
                $b *= $b;
                $c *= $c;
                if($a + $b == $c || $a + $c == $b || $b + $c == $a){
                    return $ketqua .= "YES";
                }
                else
                {
                    return $ketqua .= "NO";
                }
            }
        ?>
        <form action="" method="POST">
            <label for="textinput">Nhập cạnh a:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="textinput">Nhập cạnh b:</label><br>
            <input type="text" name="b" value=""><br>
            <label for="textinput">Nhập cạnh c:</label><br>
            <input type="text" name="c" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"]))
                echo CheckTamGiacVuong($_POST["a"], $_POST["b"], $_POST["c"])."<br/>";
        ?>
    </body>
</html>