$dataJson=json_decode(file_get_contents('php://input'));
$email=$dataJson->email;
$myfile = fopen("./log.txt", "w") or die("Unable to open file!");
$txt=$email."\n";
fwrite($myfile, $txt);
fclose($myfile);
