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
        class Student {
            //var keyword is interchangeable with public.
            var $name;
            var $major;
            var $gpa;

            //whenever a new book object is created, this function gets executed.
            function __construct($name, $major, $gpa){
                //this refers to the current object.
                $this -> name = $name;
                $this -> major = $major;
                $this -> gpa = $gpa;
            }

            //a object function can be called later.
            function hasHonors(){
                if($this->gpa >=3.5){
                    return "true";
                }
                return "false";
            }
        }

        //creating a book object (an instance of a class)
        $student1 = new Student("Jim","Business", 2.8);
        $student2 = new Student("Pam","Art",3.6);

        echo $student2 -> hasHonors();
    ?>


</body>

</html>