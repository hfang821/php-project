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
    $isMale = true;
    $nameCap = "KEVIN";
        echo "<h1>$name's site</h1>";
        echo "<hr>";
        echo "<p>He is $age years old.</p>";
        $name = "Mike";
        echo "<p>This is $name's site</p>";
        echo "$name is datatype of ".gettype($name);
        echo "<p>$name is a male? $isMale</p>";
        echo "$nameCap with lowercase is "; echo strtolower($nameCap);
        echo "<br>";
        echo "$name with uppercase is "; echo strtoupper($name);
        echo "<br>";
        echo strlen($name);
        echo "<br>";
        echo $name[0];
        echo "Kevin"[0];
        $name[0] = "B";
        echo $name;
        echo str_replace("Bike", "Panda", $name);
        echo substr($name, 0, 3);
        echo abs(10%3)+1;
        echo pow(2,2);
        echo max(2,5);
        echo floor(4.4444);
    ?>
</body>
</html>