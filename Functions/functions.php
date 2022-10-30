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
        function sayHi($name, $age) {
            echo "Hello $name! You are $age years old. <br>";
        }

        sayHi("Kevin", 15);
        sayHi("Dev", 20);
        sayHi("Tool",25);
    ?>
</body>
</html>