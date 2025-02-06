<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dzien = date('l');
        if($dzien == "Saturday" || $dzien == "Sunday"){
            echo "Weekend";
        }else{
            echo "Dzien roboczy";
        }
    ?>
</body>
</html>