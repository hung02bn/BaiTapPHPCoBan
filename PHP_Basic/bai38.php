<!DOCTYPE html>
<html>
    <head>
        <title>Bài 38</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $ketqua = "";
        if (isset($_POST["a"]))
        {
            $email = $_POST["a"];
            $result = trim($email);
            if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
            {
                $ketqua = "Đúng";
            } 
            else 
            {
                $ketqua = "Sai";
            }
        }
        ?>
        <h1>Bài 38</h1>
        <form action="" method="POST">
            <label for="a_number">Nhập email:</label><br>
            <input type="text" name="a" value=""><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>