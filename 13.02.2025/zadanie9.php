<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    function srednia($tablica){
        

        $srednia = array_sum($tablica) / count($tablica);

        echo $srednia;
    }

    srednia(array(1,2,3,4,5,6,7));

    ?>

</body>
</html>