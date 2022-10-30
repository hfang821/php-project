<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $isMale = true;
        $isTall = false;
        if($isMale && $isTall){
            echo "You are male and tall.";
        } else if($isMale && !$isTall) {
            echo "You are male but not tall.";
        } else if(!$isMale && $isTall) {
            echo " You are not male but tall";
        } else {
            echo "You are not male.";
        }
    ?>

    <br><br>

    <?php
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            } else if($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            } else {
                return $num3;
            }
        }

        echo getMax(65436,4, 5000);
    ?>

</body>
</html> 