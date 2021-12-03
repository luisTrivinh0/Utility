<?php
require_once('lib/nusoap.php');
$nome = 'luis';
$sobrenome = 'trivinho';
$options = array('location' => "http://localhost/testes/Utility/server.php"
                 ,'uri'     => "http://localhost/testes/Utility/server.php"
                 ,'trace'   => 1); 

$client = new soapclient(null,$options);
$result = $client->processar_nome($nome,$sobrenome);
?>
