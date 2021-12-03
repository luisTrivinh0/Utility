<?php
require_once('lib/nusoap.php');
$nome      = "Luís";
$URL       = "https://localhost:8080/testes/Utility/client-hello.php";
$nomespace = $URL . '?wsdl';
//Usando soap_server para criar server object
$server    = new soap_server;
$server->configureWSDL('hellotesting', $nomespace);

//registrar a função que rodará no server
$server->register('hello');

// criar a função
function hello($nome)
{
    if (!$nome) {
      return new soap_fault('Cliente', '', 'Coloque seu nome!');
    }else{
      $result = "Olá, " . $nome;
      return $result;
    }
}
// Criar HTTP
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)
                    ? $HTTP_RAW_POST_DATA 
                    : '';
$server->service(file_get_contents("php://output"));
exit();
?>
