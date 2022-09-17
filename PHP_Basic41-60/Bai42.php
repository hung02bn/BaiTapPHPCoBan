<!DOCTYPE html>
<html>
    <head>
        <title>Bài 42</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 42</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình kí tự đầu tiên không bị trùng trong chuỗi -->
        <?php
            function find_non_repeat($word) {
            $chr = null;
            for ($i = 0; $i <= strlen($word); $i++) {
                if (substr_count($word, substr($word, $i, 1)) == 1) {
                    return substr($word, $i, 1);
                }
            }
            }
        ?>
        <form action="" method="POST">
            <label for="textinput">Nhập chuỗi:</label><br>
            <input type="text" name="a" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["a"]))
                echo find_non_repeat($_POST["a"]);
        ?>
    </body>
</html>