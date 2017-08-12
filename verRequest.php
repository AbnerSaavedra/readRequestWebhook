<?php  

$myfile = fopen("./log.txt", "a") or die("Unable to open file!");
fwrite($myfile, "Se ejecuto el webhook externo \n");

$dataJson=json_decode(file_get_contents('php://input'));
/* en esta parte se optiene el mail que llega del json*/
$email=$dataJson->email;


// a partir de aqui se puede procesar el mail como se guste en este caso lo escribiremos en un log.txt


$myfile = fopen("./log.txt", "a") or die("Unable to open file!");
$txt='Email: '.$email."\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
