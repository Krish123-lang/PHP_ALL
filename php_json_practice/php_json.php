<?php
// Encoding PHP data to JSON
$data = array(
    'name' => 'John Doe',
    'age' => 25,
    'city' => 'New York'
);

// $jsonData = json_encode($data);

// echo "Encoded JSON data: " . $jsonData . "<br>";



// Decoding JSON data to PHP
// $jsonData = '{"name":"John Doe","age":25,"city":"New York"}';

// $decodedData = json_decode($jsonData);

// echo "Decoded PHP data:<br>";
// echo "Name: " . $decodedData->name . "<br>";
// echo "Age: " . $decodedData->age . "<br>";
// echo "City: " . $decodedData->city . "<br>";
// ----------------------------------------------------------------------------------------------------------

$jsData = array("a" => array(1 => "Sun", 2 => "Moon"), "b" => "Ball", "c" => array("third" => "Earth"));
$jsEn = json_encode($jsData);
// print_r($jsEn);
// {"a":{"1":"Sun","2":"Moon"},"b":"Ball","c":{"third":"Earth"}}

$jsDe = json_decode($jsEn, true);
// print_r($jsDe);
echo "The value of  1 is ", $jsDe['a'][1];
echo "<br>";
echo "The value of  2 is ", $jsDe['a'][2];
echo "<br>";
echo "The value of  third is ", $jsDe['c']['third'];
echo "<br>";
echo "The value of  b is ", $jsDe['b'];
echo "<br>";

?>


<!-- Create more multidimensional arrays and try it jsoning -->
