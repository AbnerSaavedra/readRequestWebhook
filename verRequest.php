<?php  

/*$input = @file_get_contents("php://input");
// Parsear el contenido como JSON.
$eventJson = json_decode($input);

// Usar los datos del Webhooks para alguna acción.
echo "JSON: ".$eventJson."<br>";
var_dump($eventJson);
// Responder
http_response_code(200);*/


$webhookContent = "";

$webhook = fopen('php://input' , 'rb');
while (!feof($webhook)) {
	echo stream_get_contents($webhook, 5);
    $webhookContent .= fread($webhook, 4096);
}
fclose($webhook);

error_log($webhookContent);
?>