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
        //class is a blueprint, it specifies what a movie is. (defining a new data type)
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad() {
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        //extends will inherit all the same functions from the class chef.
        class ItalianChef extends Chef { 
            function makePasta(){
                echo "The chef makes pasta <br>";
            }
            //override the special dish function
            function makeSpecialDish(){
                echo "The chef makes chicken parm. <br>";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();
        $chef->makeSpecialDish();

        $chef2 = new ItalianChef();
        $chef2->makeChicken();
        $chef2->makePasta();
        $chef2->makeSpecialDish();
    ?>


</body>

</html>