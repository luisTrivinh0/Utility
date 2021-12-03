<?php
// Pull in the NuSOAP code
require_once('lib/nusoap.php');

// Create the client instance
// Server Location

$client = new nusoap_client('http://localhost:8080/testes/Utility/serv-hello.php', true);

// Call the SOAP method
$result = $client->call('hello'
                , array('nome' => 'José'));

print_r($result);
?>