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
        class Movie {
            //visibility modifiers.
            //Public: this attribute is visible to any other codes in my program.
            public $title;
            //Private: Any code outside of the movie class cannot access the rating directly.
            private $rating;

            //whenever a new movie object is created, this function gets executed.
            function __construct($title, $rating){
                //this refers to the current object.
                $this -> title = $title;
                //also lock down the possibility of set invalid rating in the object instance.
                $this -> setRating($rating);
            }
            //Getter
            function getRating(){
                return $this->rating;
            }
            //Setter
            function setRating($rating){
                //validate if the rating is a valid rating
                if($rating === "G" || $rating === "PG" || $rating === "PG-13" || $rating === "R" || $rating === "NR"){
                    $this->rating = $rating;
                } else {
                    //if not valid, set as "not rated"
                    $this->rating = "NR";
                }
                
            }
        }

        //creating a movie object (an instance of a class)
        $avengers = new Movie("Avengers", "PG-13");
        //valid-rating: G, PG, PG-13, R, NR
        $avengers->setRating("Dog");
        echo $avengers -> getRating();
    ?>


</body>

</html>