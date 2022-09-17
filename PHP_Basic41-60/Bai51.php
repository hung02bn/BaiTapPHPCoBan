<!DOCTYPE html>
<html>
    <head>
        <title>Bài 51</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 51</h1>
        <!-- Viết một chương trình PHP đọc một số nguyên n và tìm số kết hợp của a, b, c và d (0 ≤ a, b, c, d ≤ 9) trong đó (a + b + c + d) sẽ bằng n. -->
        <?php
            function Number_of_combinations($n){
                $input = intval($n);
                $count = 0;
                for ($i=0; $i < 10; $i++) { 
                    for ($j=0; $j < 10; $j++) { 
                        for ($k=0; $k < 10; $k++) { 
                            for ($l=0; $l < 10; $l++) { 
                                if ($i + $j + $k +$l === $input) {
                                    $count++;
                                }
                            }
                        }
                    }
                }
                return "<br/>Number of combinations of a,b,c and d: $count";
            }
        ?>
        <form action="" method="POST">
            <label for="textinput">Nhập n:</label><br>
            <input type="text" name="n" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["n"]))
                echo Number_of_combinations($_POST["n"])."<br/>";
        ?>
    </body>
</html>