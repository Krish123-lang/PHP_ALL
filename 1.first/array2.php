<?php

    $arr1=["name"=>"Krishna", "age"=> 23, "level"=>"Bachelor"];
    echo $arr1["name"]."<br>".$arr1["age"]."<br>".$arr1["level"]."<br>";

    $arr1["name"]="bob";
    $arr1["phone"]="Samsung"; // Adding a new data

    $arr1 += ["color"=>"red", "year"=> 2024, "hobby"=> "Hitman(just kidding !)"];


    foreach($arr1 as $x=>$y){
        echo $x." : ".$y."<br>";
    }