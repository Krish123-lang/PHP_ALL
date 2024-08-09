<?php

    $arr1=[1,2,3,4,5];
    $arr2=array(1,2,3,4,5);
    // echo $arr1[0];
    // echo $arr2[0];

    // changing the value of index [0]
    $arr1[0]="car";
    echo var_dump($arr1)."<br>";

    $arr1[]="Truck";
    array_push($arr1, "bus"); // appends 'bus' at the end of an array


    foreach($arr1 as $x){
        echo $x."<br>";
    }