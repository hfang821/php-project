<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <form action="form.php" method="get">
            Name: <input type="text" name="name">
            <br>
            Age: <input type="text" name="age">
            <br>
            <input type="submit">
        </form> 
        <br>
        Your age is: <?php echo $_GET["age"] ?>
        Your name is: <?php echo $_GET["name"] ?>
</body>
</html>