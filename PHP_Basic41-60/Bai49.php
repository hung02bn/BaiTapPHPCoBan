<!DOCTYPE html>
<html>
    <head>
        <title>Bài 49</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 49</h1>
        <!-- Viết một chương trình PHP giải hệ phương trình: ax + by = c 
                                                             dx + ey = f 
            In các giá trị của x, y trong đó a, b, c, d, e và f đã cho. -->
        <?php
            function GiaiHePT($a,$b,$c,$d,$e,$f){
                $ketqua ="";
                $x = ($c*$e-$b*$f)/($a*$e-$d*$b);
                $y = ($c*$d-$a*$f)/($b*$d-$a*$e);
                return $ketqua .= "Giá trị của x và y là $x và $y";
            }
        ?>
        <form action="" method="POST">
            <input type="text" name="a" value="">
            x +
            <input type="text" name="b" value="">
            y =
            <input type="text" name="c" value=""><br>
            <input type="text" name="d" value="">
            x +
            <input type="text" name="e" value="">
            y =
            <input type="text" name="f" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"])&&isset($_POST["d"])&&isset($_POST["e"])&&isset($_POST["f"]))
                echo GiaiHePT($_POST["a"], $_POST["b"], $_POST["c"],$_POST["d"],$_POST["e"],$_POST["f"])."<br/>";
        ?>
    </body>
</html>