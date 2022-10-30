<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <!-- Get method will display that information in a query string within URL (not secure) -->
        <!-- Post will do exactly what get does, except it does not put into url. -->
        <form action="postVsGet.php" method="post">
            Password: <input type="password" name="password">
            <br>
            <input type="submit">
        </form> 
        <br><br>

        <?php 
            echo $_POST["password"];
        ?>
</body>
</html>