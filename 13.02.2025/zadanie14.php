<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
   function silnia($n){
    $silnia = 1;
    for ($i=1; $i<=$n; $i++) {
        $silnia *= $i;
    }
    echo ("$n! = $silnia");
   }
   silnia(4);
       
    

    ?>


</body>
</html>