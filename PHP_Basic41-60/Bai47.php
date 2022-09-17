<!DOCTYPE html>
<html>
    <head>
        <title>Bài 47</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 47</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình số chữ số của tổng 2 số -->
        <?php
            function SoChuSoCuaTong($a,$b){
                $ketqua ="";
                $d = (int)(log10($a + $b) + 1);
                return $ketqua .="<br/> Số chữ số của tổng hai số $a và $b là: $d <br/>";
            }
        ?>
        <form action="" method="POST">
            <label for="textinput">Nhập số a:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="textinput">Nhập số b:</label><br>
            <input type="text" name="b" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["a"])&&isset($_POST["b"]))
                echo SoChuSoCuaTong($_POST["a"],$_POST["b"])."<br/>";
        ?>
    </body>
</html>