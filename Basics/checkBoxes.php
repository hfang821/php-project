<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <form action="checkBoxes.php" method="post">
            <!-- putting the [] in the name parameter will signify that we are storing info in array. -->
           Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form> 
        <br><br>

        <?php 
            $fruits = $_POST['fruits'];
            echo $fruits[0];
            echo $fruits[1];
        ?>
</body>
</html>