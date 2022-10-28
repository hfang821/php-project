<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php 
    $name = "Kevin";
    $age = 26;
        echo "<h1>$name's site</h1>";
        echo "<hr>";
        echo "<p>He is $age years old.</p>";
        $name = "Mike";
        echo "<p>This is $name's site</p>";
        echo "$name is datatype of ".gettype($name)
    ?>
</body>
</html>