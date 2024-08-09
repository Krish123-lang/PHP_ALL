<?php
    function greet($name, $age, $level=1){
        echo "Hello $name, You are $age years old!. You are in level $level";
        echo "<br>";
    }
    greet("Krishna", 23);
    greet("Krishna Mandal", 45); 

    echo "<hr>";

    function sum($a, $b){
        $z=$a+$b;
        return "The sum of $a and $b is: $z"."<br>";
    }
    echo(sum(5,3));
?>