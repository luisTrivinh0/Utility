<?php
  try{
    
    $client = new SoapClient ('http://www.dneonline.com/calculator.asmx?wsdl');
    $valores = new StdClass();
    $valores->intA = $_POST['valor1'];
    $valores->intB = $_POST['valor2'];

    echo "Valores: ". $valores->intA . " e " .  $valores->intB . "<br><br>";

    $result = $client->Add($valores);
    echo "Soma: " . $result->AddResult . "<br><br>";

    $result = $client->Subtract($valores);
    echo "Subtração: " . $result->SubtractResult . "<br><br>";

    $result = $client->Multiply($valores);
    echo "Multiplicação: " . $result->MultiplyResult . "<br><br>";

    $result = $client->Divide($valores);
    echo "Divisão: " . $result->DivideResult . "<br><br>";

    echo '<pre>';
    var_dump($client->__getFunctions());
    var_dump($client->__getTypes());
    echo '</pre>';

  }catch(SoapFault $e){
    echo $e->getMessage();
  }

?>