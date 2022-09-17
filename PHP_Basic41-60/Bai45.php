<!DOCTYPE html>
<html>
    <head>
        <title>Bài 45</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 45</h1>
        <!-- Viết 1 chương trình PHP in ra màn hình tổng các chữ số của một số -->
        <?php
            function sum_of_digits($nums) {
                $digits_sum = 0;
                for ($i = 0; $i < strlen($nums); $i++) {
                        $digits_sum += $nums[$i];
                        }
                return $digits_sum;
            }
        ?>
        <form action="" method="POST">
            <label for="textinput">Nhập số:</label><br>
            <input type="text" name="a" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["a"]))
                echo sum_of_digits($_POST["a"])."<br/>";
        ?>
    </body>
</html>