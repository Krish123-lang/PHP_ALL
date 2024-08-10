<?php
$myFile = fopen("new.txt", "w") or die("Unable to create file");
$txt = "first line\nsecond line\nthird line\nfourth line\nfifth line\n";
fwrite($myFile, $txt); // writing into new.txt file
fclose($myFile);
echo "File created successfully";


$openFile = fopen("new.txt", "r") or die("Unable to open file");
// echo fread($openFile, filesize("new.txt"));

while (!feof($openFile)) {
    echo fgets($openFile) . "<br>";
}
fclose($openFile);


$appendFile = fopen("file.txt", "a") or die("Unable to open file");
fwrite($appendFile, "another first is appended\nthis is also appended");
fclose($appendFile);
