<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    function czyParzysta($liczba){
        if($liczba % 2 == 0){
            return true;
        }else{
            return false;
        }
    }

    czyParzysta(6);

    ?>

</body>
</html>