<!DOCTYPE html>
<html>
    <head>
        <title>Bài 34</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $ketqua = "";
            if(isset($_POST["a"]) && isset($_POST["x"]) && isset($_POST["y"])){
                $num = $_POST["a"];
                $pos1 = $_POST["x"];
                $pos2 = $_POST["y"];
                $pos1--;
                $pos2--;
                $bin_num = strrev(decbin($num));
                if ($bin_num[$pos1] == $bin_num[$pos2]) {
                    $ketqua = "Đúng";
                } else {
                    $ketqua = "Sai";
                }
            }
        ?>
        <h1>Bài 34</h1>
        <form action="" method="POST">
            <label for="a_number">Nhập a:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="a_number">Nhập vị tri 1:</label><br>
            <input type="text" name="x" value=""><br>
            <label for="b_number">Nhập vị trí 2:</label><br>
            <input type="text" name="y" value=""><br><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>