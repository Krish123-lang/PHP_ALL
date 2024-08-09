<?php
// echo "krishna is great";

$name = "krishna";
$arr1 = [1, 2, 3, 4, 5];
if ($name == "krishna") {
    echo "Yo! krishna";
    echo "<br>";
} else {
    echo "Habibi";
    echo "<br>";
}

for ($i = 0; $i < 10; $i++) {
    echo $arr1[$i] . "<br>";
}

echo var_dump($arr1);
echo var_dump($name);
?>