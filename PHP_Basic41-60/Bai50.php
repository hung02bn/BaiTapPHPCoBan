<!DOCTYPE html>
<html>
    <head>
        <title>Bài 50</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 50</h1>
        <!-- Viết một chương trình PHP để tính số nợ trong n tháng. 
        Vay số tiền là 100.000 đô la và khoản vay cộng thêm 5% lãi suất của khoản nợ và làm tròn nó đến 1.000 gần nhất. -->
        <?php
            function TinhNo($n){
                $no = "1000000";
                for($i=0; $i<$n; $i++){
                    $no = ceil(($no * 1.05)/1000) * 1000;   
                }
                return "Khoản nợ phải trả sau $n tháng là: $no";
            }
        ?>
        <form action="" method="POST">
            <label for="textinput">Nhập n:</label><br>
            <input type="text" name="n" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST["n"]))
                echo TinhNo($_POST["n"])."<br/>";
        ?>
    </body>
</html>