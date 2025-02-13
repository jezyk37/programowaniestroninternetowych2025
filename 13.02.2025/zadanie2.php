<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $dzien = 1;
        switch ($dzien) {
         case "1":
            echo "Poniedziałek";
            break;
         case "2":
            echo "Wtorek";
            break;
         case "3":
            echo "Środa";
            break;
         case "4":
            echo "Czwartek";
            break;
        case "5":
            echo "Piątek";
            break;
        case "6":
            echo "Sobota";
            break;
        case "7":
            echo "Niedziela";
            break;
        }
        
    ?>

</body>
</html>