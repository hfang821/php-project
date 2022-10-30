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
        //class is a blueprint, it specifies what a book is. (defining a new data type)
        class Book {
            //var keyword is interchangeable with public.
            var $title;
            var $author;
            var $pages;

            //whenever a new book object is created, this function gets executed.
            function __construct($aTitle, $aAuthor, $aPages){
                //this refers to the current object.
                $this -> title = $aTitle;
                $this -> author = $aAuthor;
                $this -> pages = $aPages;
            }
        }

        //creating a book object (an instance of a class)
        $book1 = new Book("Harry Potter","JK Rowling",400);
        $book1 -> title = "Hunger Games";
        $book2 = new Book("Lord of the Rings","Tolkien",700);

        echo $book1 -> title;

    ?>


</body>

</html>