<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php include "header.html" ?>
        
        <p> Hello World! </p>

        <?php 
            $title = "My first Post";
            $author = "Kevin";
            $wordCount = 400;
            include "article-header.php" ;
        ?>

        <?php
            include "useful-tools.php";
            sayHi("Kevin");
            echo $feetInMiles;
        ?>

        <?php include "footer.html" ?>
</body>
</html>