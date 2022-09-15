<!DOCTYPE html>
<html>
    <head>
        <title>Bài 39</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 39</h1> 
        <?php
            $myfile = fopen("D:\bai39.txt", "w") or die("Unable to open file!");
            $txt = "PHP Exercises\n";
            fwrite($myfile, $txt);
            $txt = "from\n";
            fwrite($myfile, $txt);
            $txt = "w3resource\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            echo "Size of the file: ".filesize("D:\bai39.txt")."<br/>";
        ?>
    </body>
</html>