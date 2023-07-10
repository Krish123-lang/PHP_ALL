<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="first" placeholder="Enter first number"> <br><br>
    <input type="number" name="second" placeholder="Enter Top number"> <br><br>
    <input type="submit" value="Print"><br><br>
</form>

<!-- ============================================================== -->
<?php

$first = $_POST["first"];
$second = $_POST["second"];

for ($x = 1; $x <= $second; $x++) {
    echo $first, " x ", $x, " = ", $first * $x, "<br>";
}

?>
