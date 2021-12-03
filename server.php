<?php
require_once('lib/nusoap.php');


$server = new soap_server();
$server->soap_defencoding = 'UTF-8';
$server->decode_utf8 = false;
$server->encode_utf8 = true;
$server->configureWSDL('Teste', 'xsd:Teste2');

$server->register('processar_nome'
          , array('nome'         => 'xsd:string'
                , 'sobrenome'    => 'xsd:string')
          , array('nomecompleto' => 'xsd:string'));
          
function processar_nome($nome,$sobrenome){
  return "Olá " . $nome . " " . $sobrenome;
}
        
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)
                    ? $HTTP_RAW_POST_DATA 
                    : '';
$server->service(file_get_contents("php://input"));

?>