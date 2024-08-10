<?php
echo "Hello" . "<br>";

echo date("Y/m/d") . "<br>"; // 2024/08/10
echo date("Y.m-d") . "<br>"; // 2024.08-10
echo date("Y-m-d") . "<br>"; // 2024-08-10
echo date("l") . "<br>"; // Saturday


date_default_timezone_set("Asia/Kathmandu");
echo date("H:i:sa") . "<br>"; // 13:42:09pm
echo date("h:i:sa") . "<br>"; // 01:42:09pm

echo date_default_timezone_get() . "<br>"; // Asia/Kathmandu

$timeZone = date_default_timezone_get();
date_default_timezone_set($timeZone);
echo date("Y-m-d | h:i:sa")."<br>";

echo date("Y-m-d | h:i:sa",strtotime("tomorrow")) . "<br>";
echo date("Y-m-d | h:i:sa",strtotime("next saturday")) . "<br>";
echo date("Y-m-d | h:i:sa",strtotime("+3 months")) . "<br>";


?>


<p>&copy;<?php echo date("Y"); ?></p> <br>