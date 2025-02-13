<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    function wieksza($a, $b){
        if($a >= $b){
            echo $a . " - wieksza";
        }else if($b >= $a){
            echo $b . " - wieksza";
        }else if($a == $b){
            echo "liczby sa takie same";    
        }
    }

    wieksza(2,4);
    wieksza(6,2);
    wieksza(10,7);
    wieksza(5,5);
    

    ?>

</body>
</html>