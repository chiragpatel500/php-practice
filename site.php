<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpPractice</title>
</head>

<body>
    <!-- php -V // in command prompt. -->
    <!-- php -S localhost:4000   // in command prompt-->
    <!-- http://localhost:4000/www/site.php -->
    <?php
    echo "Chirag Patel PhpPractice";
    echo "<br>";
    echo "all the code is in the comments";
    echo "<br>";
    echo "kindly go through all the comments to find any solutions."
    ?>
</body>

</html>

<!-- Start -->
<!--P1:Define and Change Variable value
    $characterName = "mike";
    $characterAge = 65;
    echo "There was man named $characterName <br>";
    echo "he was $characterAge yrs old <br>";
    $characterName = "jason";
    echo "he really like the name $characterName<br>";
    echo "but didnot like being $characterAge <br>"; -->

<!--P2:Types of data types and printing it out.
    $phrase = "To be or not to be"; //text
    $age = 30; //integer
    $gpa = 3.7; //decimal
    $isMale = true; //boolean "true or false" // null // no value
    echo $phrase; -->

<!-- P3:Working with strings and modifying its values.
        $phrase = "Girafee academy";
    // echo strtolower("DOG"); //convert to lower case
    // echo strlen($phrase); // tell the lenghth
    // echo $phrase[1]; // find the character as per index number
    // echo "jeff"[0]; // find the 1st character of the given string
    // 1 $phrase[0] = "k"; // modify char of he strings
    // 2 echo $phrase; and print it out using echo.
    // echo str_replace("Girafee", "panda", $phrase);// replace string words
    // echo substr($phrase, 8 ); -->


<!-- P4:Working with Numbers 
// echo 5 - 9; //subtract
// echo 70 * 10; // multi
// echo 5 + 25; // add
// echo 5.7 * 9; // multi decimal
//echo 10 % 3; //[divison]Find remainder using modules opertor
//echo 4 + 5 * 10;//order of operation. // ans = 54
//echo (4+5) * 10;// order of operation. //ans = 90

// $num = 10; //define varibale and give value
// $num++; // ask to add
// $num += 25; //adding directly to number using +=;
// echo $num; // print the added result.


//echo abs(100);//abstract
//echo pow(2,4); //power // raise or down to the power
//echo sqrt(144);// find square root
//echo max(2,10); // find the max(bigger number);
//echo round(3.2); // round the decimal to nearest whole number.
//echo seil(3.2); // top whole number
//echpo floor(3.2)//down low number -->


<!-- P5:Getting User Input from a form
    step 1: define the html form using get method
    <form action="site.php" method="get">
    Name:<input type="text" name="username"><br>
    Age:<input tyep="number" name="age">
    <input type="submit">
</form> <br>
    step 2: Display the input value using the $_GET method and Write it our using php.
    Your Name is : <?php //echo $_GET["username"] 
                    ?>  <br>
    Your age is : <?php //echo $_GET["age"] 
                    ?> -->

<!-- P6:Built a basic calculator using values of the form 
    //step1:Define form with submit button    
    <form action="site.php" method="get">
    Num1:<input type="number" name="num1"> <br>
    Num2:<input type="number" name=" num2">
    <input type="submit">
    </form>

    //step2:Write the logic and display using GET Method  
    ANSWER: <?php //echo $_GET["num1"] + $_GET["num2"]
            ?>
-->


<!-- P7:Madlibs game //accesing form data and using it's values 
        Step1:Setup the form using get method and input submit name
        <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural noun: <input type="text" name="pluralNoun"> <br>
        Celebirty: <input type="text" name="celebrity"> <br>
        <input type="submit">
        </form>

        step2:Get input values of the form using $_GET and assign to a vairable.
        <?php
        //$color = $_GET["color"];
        //$pluralNoun = $_GET["pluralNoun"];
        //$celebrity = $_GET["celebrity"];

        //STEP3: Display the values using correspnding varibale.
        //echo "roses are $color <br>";
        //echo "$pluralNoun are blue <br>";
        //echo "i love $celebrity <br>"; 
        ?>
-->
<!-- P8:GET & POST
STEP1:create a form with post method
        <form action="site.php" method="post">
        Password:<input type="password" name="password"><br>
        <input type="submit">
    </form>
    step2:post the password using post $_POST without dispaying it in url.
    <?php //echo $_POST["password"]; 
    ?>
-->
<!-- P9:Arrays
    <?php
    //$friends = array("kevin", "karen", "oscar", "jim");//Define array
    //$friends[4]="angela"; //add or change value as per index.
    //echo $friends[4];//display a particluar place.
    //echo count($friends); //show total number of elements.
    ?>
-->
<!-- P10:Using CheckBoxes 
    step1:define the form with type checkboxes and post method.
        <form action="site.php" method="post">
             Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
             Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
                Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>
    step2:access the value of the checkbox and print as per index.
     <?php
        //$fruits = $_POST["fruits"];
        //echo $fruits[1];
        ?>
-->
<!-- P11:Associatiev arrays
        Step1:Define form with post.
  <form action="site.php" method="post">
      <input type="text" name="student">
        <input type="submit">
    </form>

    step2:Enter keys and values into an array.
    <?php
    //$grades = array("jim" => "A+", "Pam" => "B-", "Oscar" => "c+");
    //$grades["jim"]="F"; // change the values
    //echo $grades["jim"]; // call the value
    //echo count($grades); // total count.


    //accesing the form input value inside the asscoaiteve array. 
    //echo $grades[$_POST["student"]];
    ?>
-->
<!-- P12:Functions
            <?php
            //Step1:Define the Function giving parameters.
            // function sayHi($name, $age)
            // {
            //     echo "Hello $name you are $age <br>";// write the wished output.
            // }
            //step2: Call the function giving value for params.
            // sayHi("mike", 35);
            // sayHi("tom", 25);
            // sayHi("jeff", 45);
            ?>

-->
<!-- P13:Return
            //<?php
                //Step1:Define the function with param.  
                //  function cube($num){
                //     //Step2:Return the value by ending the function.
                //         return $num * $num *$num;// 
                //     }
                //     //step3: call the func with some value for params to print results. 
                //     echo cube(4);
                ?> 
-->

<!--P14:If -statements
        // && = AND operator
        // || = Or operator
        // !  = Negation operator.            
        <?php
        //Step1:Define the value in true or false;
        // $isMale = false;
        // $isTall = false;
        //Step2:write the if/ifelse/else logic to print the output 
        // if ($isMale && $isTall) {
        //     echo "you are tall male";// step3:Type withe wished output the the condition.
        // } elseif ($isMale && !$isTall) {
        //     echo "you are ashort male";
        // } elseif (!$isMale && $isTall) {
        //     echo "you are not male but tall";
        // } else {
        //     echo "you are not male nor tall";
        // }                      
        ?>
-->

<!-- P15:if-Staments with Comparisons 
<?php

//using diffrent types of comaparison operator 
// function getMax($num1, $num2, $num3)
// {
//     if ($num1 >= $num2 && $num1 >= $num3) {
//         return $num1;
//     } elseif ($num2 >= $num1 && $num2 >= $num3) {
//         return $num2;
//     } else {
//         return $num3;
//     }
// }
// echo getMax(3, 500, 700);

?>
-->
<!--P16:Building a better calculator. 
//step1:define the input form.
 <form action="site.php" method="post">
        First Num:<input type="number" step="0.0001" name="num1"> <br>
        OP:<input type="text" name="op"><br>
        Second Num: <input type="number" step="0.0001" name="num2"> <br>
        <input type="submit">
    </form>

    <?php
    //step2:get data from the post form and assign it to a variable.
    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    // $OP = $_POST["op"];

    //step3:Write the logic with +,-,/,* to print calcuated output.
    // if ($OP == "+") {
    //     echo $num1 + $num2;
    // } elseif ($OP == "-") {
    //     echo $num1 - $num2;
    // } elseif ($OP == "/") {
    //     echo $num1 / $num2;
    // } elseif ($OP == "*") {
    //     echo $num1 * $num2;
    // } else {
    //     echo "invalid operator";
    // }
    ?>
-->

<!-- P17: Switch statments 

//Step1: Define the form with post method.
<form action="site.php" method="post">
        what was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
    //step2: Get the data of the form and assihn it to variable.
    //$grade = $_POST["grade"];
    //Step3:switch statments to compnare one varaible to many conditions.
    // switch ($grade) {
    //     case "A":
    //         echo "you did amazing!";
    //         break; // break away form staement endind it.
    //     case "B":
    //         echo "you did pretty good";
    //         break;
    //     case "C":
    //         echo "you did poorly!";
    //         break;
    //     case "D":
    //         echo "you did very bad!";
    //         break;
    //     case "F":
    //         echo "you  fail";
    //         break;
    //     default:
    //         echo "invalid grade";
    // }
    ?>
 -->
<!-- P18:For loops
   <?php
    //Step1: Define an array to be looped through and assign to a vairable.
    // $luckyNumbers = array(4, 8, 9, 15, 1, 9, 2);

    //Step2:write the for loop to loopthrough the array.
    // for ($i = 0; $i < count($luckyNumbers); $i++) {
    //     echo "$luckyNumbers[$i] <br>"; // display the results
    // }
    ?>
-->

<!-- P19:How to include Html Files into main file.
    <?php //include "header.html" 
    ?>//just exmaple
    <p>Hello there</p>
    <?php // include "footer.html" 
    ?> //just exmple
-->
<!-- P20:How to include and Print from html & php files
   <?php
    // $title = "my first post";
    // $author = "chirag";
    // $wordCount = 500;
    // include "article-header.php" 
    ?>

 <?php //include "useful-tools.php";
    //echo $feetInMile;
    ?>
-->

<!--P21:Classes & objects 
 <?php
    //  Classes & objects.
    //Step1:create a Class and define vaiarbles.
    // class Book // created a class called book.
    // {
    //     var $title;   //define varaibles for the class.
    //     var $author;
    //     var $pages;
    // }

    //Step2:create object using the class and provide values to variables.
    // $book1 = new Book;
    // $book1->title = "harry potter";
    // $book1->author = "jk rowling";
    // $book1->pages = 400;
    // //step3:call the newly created object to print the values of certain variable.
    // echo $book1->author;

    //Step2:create object using the class and provide values to variables.
    // $book2 = new Book;
    // $book2->title = "rings";
    // $book2->author = "tokein";
    // $book2->pages = 700;
    // //step3:call the newly created object to print the values of certain variable.
    // echo $book2->title;
    ?>
-->
<!--P22:Constructors 
<?php
//Constructor 
//Step1:create a Class and define vaiarbles.
// class Book
// {
//     var $title;
//     var $author;
//     var $pages;
//  //Step2:Create a construct function(constructor) and parameters into it.
//     function __construct($aTitle, $aAuthor, $aPages)
//     {
//    //step3:assign the varaibles of the class to the function(construct) parameters. 
//         $this->title = $aTitle;
//         $this->author = $aAuthor;
//         $this->pages = $aPages;
//     }
// }
// //step4:Create new object using class and pass values as parameters.
// $book1 = new Book("harry potter", "jk rowling", 400);
// $book1->title = "hunger games"; // value can be changed.
// $book2 = new Book("rings", "tokein", 700);

// //step5:display the value of a particular object parameter.
// echo $book1->title;
// echo $book2->author;
?>
 -->


<!--P23:object functions php 
    <?php
    //step1:create a class and define variables.
    // class Student
    // {
    //     var $name;
    //     var $major;
    //     var $gpa;
    //step2:create a contsructor and assign the class varaibles to it's parameters.
    //     function __construct($name, $major, $gpa)
    //     {
    //         $this->name = $name;
    //         $this->major = $major;
    //         $this->gpa = $gpa;
    //     }
    //step3:create function to check a particluar condition.
    //     function hasHonors()
    //     {
    //         if ($this->gpa >= 3.5) {
    //             return "true";
    //         } else {
    //             return "false";
    //         }
    //     }
    // }
    //step4:create new objects using the class and pass values of the variables. 
    // $student1 = new Student("jim", "Business", 2.8);
    // $student2 = new Student("pam", "Art", 3.6);

    //step5:Display the codnitions by running condition fucntion on any particlar object. 
    // echo $student2->hasHonors();
    ?>
 -->
<!--P24:Getters & setters
   <?php
    // //step1:Create a class
    //     class Movie
    //     {
    // //step2:create public or private vars;
    //         public $title; // availble to all use.
    //         private $rating;// only avaible to a particular class.
    // //step3:create constructor and assign vars to it's parameters.
    //         function __construct($title, $rating)
    //         {
    //             $this->title = $title;
    //             $this->setRating($rating);
    //         }
    // //step4:Get:create a fucntion to get partucliar condtion checked on an object. 
    //         function getRating()
    //         {
    //             return $this->rating;
    //         }
    // //step5:set:create function to set particluar conditions for obejct parametrs.
    //         function setRating($rating)
    //         {
    //             if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
    //                 $this->rating = $rating;
    //             } else {
    //                 $this->rating = "NR";
    //             }
    //         }
    //     };
    ?>
-->
<!-- P25:Inheritance

    <?php

    // //step1.1:create a class
    // class Chef
    // {
    //     //step1.2:Create many function in this class.
    //     function makeChicken()
    //     {
    //         echo "The chef makes chicken-salad"; // print the wished output.
    //     }
    //     function makeSalad()
    //     {
    //         echo "The chef makes salad";
    //     }
    //     function makeSpecialDish()
    //     {
    //         echo "The chef makes bbq ribs";
    //     }
    // };
    // //step2.1:crate a new class and inherit properties of other class by using "extends"
    // class ItalianChef extends Chef
    // {
    //     //ste2.2:write functions
    //     function makePasta()
    //     {
    //         echo "The chef makes pasta";
    //     }
    //     //step2.3:you can also override the output of inherited function.  
    //     function makeSpecialDish()
    //     {
    //         echo "The chef makes chicken parm";
    //     }
    // };

    // //step3: create and object using class.
    // $chef = new Chef();
    // $italianChef = new ItalianChef();
    // //step4:run function on the obejcts to get output.
    // $chef->makeChicken();
    // echo "<br>";
    // $italianChef->makeSpecialDish();
    ?>
 -->

<!-- End -->