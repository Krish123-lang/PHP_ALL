<!DOCTYPE html>
<html>

<body>

    <?php

    /*  
     *** PHP Data Types ***
    ------------------------------------------------------------------
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
    ------------------------------------------------------------------
    
     *** PHP String methods ***
    ------------------------------------------------------------------
    var_dump(12) => Checks the type of Data
    
    $arr = array("Apple", "Ball", "Cat"); => Creating and printing Array
    var_dump($arr);

    echo strlen($lett); => Print string length
    echo str_word_count($lett); => Print word count
    echo strrev($lett); => To reverse a string
    echo strpos($lett, "Mandal"); => To get the position of the string
    echo str_replace("Mandal", "world", $lett); => To replace the string ... string, string_you_want_to_replace_with, The_Actual_String
    ------------------------------------------------------------------ 
    */

    // ##### STRING #####

    // $num1 = 12;
    // $num2 = 10;
    // $userInp = readline("Enter your name: ");
    // $a = "Hello $userInp";
    // echo "<h2>My first PHP script! </h2> ", $a, " You are good !", $num1 + $num2;
    // print "Hello world";

    // var_dump($num1);
    // var_dump($userInp);
    // var_dump($a);
    // var_dump($num1 + $num2);

    // $arr = array("Apple", "Ball", "Cat");
    // var_dump($arr);

    // $lett = "Krishna Mandal";
    // echo strlen($lett);
    // "<br>"; // String length
    // echo str_word_count($lett);
    // "<br>";  // String word count
    // echo strrev($lett);
    // echo strpos($lett, "Mandal");
    // echo str_replace("Mandal", "world", $lett);
    // 
    ?>

    <?php
    /* 
        is_int($x) => Checks integer - returns True or False
        is_float($x) => Checks float - returns True or False
        is_finite($x) => Checks finite number - returns True or False
        is_infinite($x) => Checks infinite number - returns True or False
        is_numeric($x) => Checks if it is number - returns True or False

        ### Type Casting ###
        $x = "23465.768";
        $int_cast = (int)$x; => type casting string to number
        echo $int_cast;

    */


    // ##### NUMBERS #####
    // $x = 5985;
    // var_dump(is_int($x)); // Returns boolean True

    // $x = 59.85;
    // var_dump(is_int($x)); // Returns boolean False

    // $x = 59.85;
    // var_dump(is_float($x)); // Returns boolean True

    // $x = 1.9e411;
    // var_dump(is_finite($x)); // Returns boolean False
    // var_dump(is_infinite($x)); // Returns boolean True

    // $x = acos(8);
    // var_dump(is_nan($x));  // Returns boolean True

    // $x = 5985;
    // var_dump(is_numeric($x));  // Returns boolean True

    // // Cast float to int ##### TYPE CASTING #####
    // $x = 23465.768;
    // $int_cast = (int)$x;
    // echo $int_cast;

    // echo "<br>";

    // // Cast string to int
    // $x = "23465.768";
    // $int_cast = (int)$x;
    // echo $int_cast;

    ?>

    <?php

    // ##### MATHS #####
    /* 
        pi() => PI function -> 3.1415926535898
        min(0, 150, 30, 20, -8, -200) -> Min number
        max(0, 150, 30, 20, -8, -200)  -> Max number
        abs(-6.7) -> Absolute number - to +
        sqrt(64) -> Square Root 8 is the square root of 64
        round(0.60) -> Rounding Values
        rand() -> Returns random number
        rand(10, 100) -> Returns random number from 10 - 100
    */
    // echo (pi());
    // echo (min(0, 150, 30, 20, -8, -200));
    // echo (max(0, 150, 30, 20, -8, -200));
    // echo (abs(-6.7));
    // echo (sqrt(64));
    // echo (round(0.60));
    // echo rand();
    // echo (rand(10, 100));
    ?>

    <?php
    ##### CONSTANT #####
    //---------------------------------------------------------------------------------
    /* 
    syntax: define("constant_name", "Value for the constant", false); // False by default
    */

    // define("greeting", "Hello world", false); // False by default
    // echo greeting;

    // define('cars', ["Apple", "Ball", "Cat"]);
    // echo cars[1];

    // function myFunc()
    // {
    //     echo cars[2];
    // };

    // myFunc();

    ?>


    <?php
    // ##### Operators #####
    // ---------------------------------------------------------------------------------

    // 1. Arithmetic operators -> + - * / % **
    // 2. Assignment operators -> = += -= *= /= %=
    // 3. Comparison operators -> == === != <> !== > < >= <= <=>
    // 4. Increment/Decrement operators -> ++$x $x++ --$x $x--
    // 5. Logical operators -> and or xor && || !
    // 6. String operators -> . .=
    // 7. Array operators -> + == === != <> !== 
    // 8. Conditional assignment operators -> ?: ??
    // ---------------------------------------------------------------------------------

    ?>

    <?php
    ##### If Elseif else #####
    // ---------------------------------------------------------------------------------
    // $t = date("H");

    // if ($t < "10") {
    //     echo "Have a good morning!";
    // } elseif ($t < "20") {
    //     echo "Have a good day!";
    // } else {
    //     echo "Have a good night!";
    // }

    ?>

    <?php

    ##### Switch case #####
    // ---------------------------------------------------------------------------------
    // $favcolor = "red";

    // switch ($favcolor) {
    //     case "red":
    //         echo "Your favorite color is red!";
    //         break;
    //     case "blue":
    //         echo "Your favorite color is blue!";
    //         break;
    //     case "green":
    //         echo "Your favorite color is green!";
    //         break;
    //     default:
    //         echo "Your favorite color is neither red, blue, nor green!";
    // }
    ?>

    <?php
    // *** Loops ***
    ### While Loop ###
    // $x = 1;

    // while ($x <= 5) {
    //     echo "The number is: $x <br>";
    //     $x++;
    // }
    ?>

    <?php
    // function myfunc($fname, $lname){
    //     echo "Oe $fname $lname";
    // }
    // myfunc("Krishna", "Mandal");

    // function addNumbers(int $a, int $b)
    // {
    //     return $a + $b;
    // }
    // echo addNumbers(5, "5");

    // function add($a, $b)
    // {
    //     $s = $a + $b;
    //     return $s;
    // }
    // echo add(12, 20);
    ?>

    <?php
    // *** PHP ARRAY ***
    // $fruits = array("dog", "le", "kjdnfkdjfj");
    // $fruits[3] = "fish";
    // $fruits[4] = "donkey";

    // foreach ($fruits as $a) {
    //     echo "<br>";
    //     echo $a;
    // }

    // $age = array("a" => 12, "b" => 13, "c" => 14);
    // echo $age["a"];
    // echo count($age);
    // foreach ($age as $key => $value) {
    //     echo "$key => $value <br>";
    // }

    // $cars = array("Volvo", "BMW", "Toyota");
    // $arrlength = count($cars);

    // for ($x = 0; $x < $arrlength; $x++) {
    //     echo $cars[$x];
    //     echo "<br>";
    // }

    // $cars = array(
    //     array("Volvo", 22, 18),
    //     array("BMW", 15, 13),
    //     array("Saab", 5, 2),
    //     array("Land Rover", 17, 15)
    // );

    // Sorting Arrays
    // $alpha = array("apple", "zorgans", "mars", "horintal");
    // $numbers = array(1, 90, 45, 2, 89, 69, 43, 29);
    // $assoc = array("a"=>12, "b"=>69, "z"=> 34, "f"=> 45, "k"=> 89);

    // sort($numbers);
    // rsort($numbers);


    // echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    // echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    // echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    // echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    // for ($row = 0; $row < 4; $row++) {
    //     echo "<p><b>Row number $row</b></p>";
    //     echo "<ul>";
    //     for ($col = 0; $col < 3; $col++) {
    //         echo "<li>" . $cars[$row][$col] . "</li>";
    //     }
    //     echo "</ul>";
    // }
    ?>

    <?php
    // *** SUPERGLOBALS ***

    // $x = 75;
    // $y = 25;

    // function addition()
    // {
    //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    // }

    // addition();
    // echo $z;

    ## ########################################3

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>



</body>

</html>
