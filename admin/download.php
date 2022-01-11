<?php
// $file = fopen("demo.txt", 'a+');
// $text = "Hello world How Are You\n";
// fwrite($file, $text);
$number = $_REQUEST['number'];

$file = "../list/".$number.".txt";
$txt = fopen($file, "a+") or die("Unable to open file!");
fwrite($txt, "");
fclose($txt);

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);
?>