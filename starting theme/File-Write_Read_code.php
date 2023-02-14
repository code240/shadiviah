$myFilename= "../themes/themeEleven.html";
$myfile = fopen($myFilename, "r") or die("Unable to open file!");
$data= fread($myfile,filesize($myFilename));
fclose($myfile);

$myfile = fopen("sample.php", "w") or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);
