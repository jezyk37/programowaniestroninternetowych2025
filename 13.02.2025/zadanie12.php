<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    function czyPelnoletni($wiek){
        if($wiek >= 18){
            return true;
        }else{
            return false;
        }
    }
    czyPelnoletni(20)
    ?>

</body>
</html>