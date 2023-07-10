<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="place" placeholder="Enter place name"> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
$place = $_POST["place"];
$caps = ucwords($place);

$place_arr = array("Nepal" => "Kathmandu", "India" => "New Delhi", "China" => "Bejeing",);

if ($caps) {
    echo $place_arr[$caps];
}
?>
