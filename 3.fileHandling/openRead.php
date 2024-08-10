<?php
// just reads the file. that's it
// echo readfile("file.txt");

$myFile = fopen("file.txt", "r") or die("Unable to open file !");
// echo fread($myFile, filesize("file.txt"));

// echo fgets($myFile); // returns a single line

// echo fgetc($myFile); // returns a single character

while (!feof($myFile)) {
    echo fgets($myFile) . "<br>";

    // print all the character one in a line
    // echo fgetc($myFile) . "<br>";
}
fclose($myFile);
