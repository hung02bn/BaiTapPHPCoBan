<!DOCTYPE html>
<html>
    <head>
        <title>Bài 36</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $ketqua = "";
            if(isset($_POST["a"]) && isset($_POST["b"])){
                $str1 = $_POST["a"];
                $str2 = $_POST["b"];
                $str1_len = strlen($str1);
                $str2_len = strlen($str2);
                if (substr($str1, $str1_len-$str2_len, $str2_len) == $str2) {
                    return "true";
                } 
                else 
                {
                return "false";
                }
            }
        ?>
        <h1>Bài 36</h1>
        <form action="" method="POST">
            <label for="a_number">Nhập chuỗi 1:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="a_number">Nhập chuỗi 2:</label><br>
            <input type="text" name="b" value=""><br><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>