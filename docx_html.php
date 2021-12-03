<?php
require_once 'vendor/autoload.php';

$uploaddir = 'documentos/';
$uploadfile = $uploaddir . basename($_FILES['fileUpload']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.";
} else {
    echo "Possível ataque de upload de arquivo!";
}

$arquivo_antigo = $uploadfile;
$arquivo_novo = 'documentos/documentodocx2html.docx';

echo rename($arquivo_antigo, $arquivo_novo); // Resultado: TRUE 

echo '<form action="docx2html.php" method="post">
Faça o Download do arquivo em PDF:
<input type="submit" value="Download"/>
</form>';

  // if(isset($_FILES['fileUpload']))
  // {
  //    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
//
  //    $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
  //    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
  //    $dir = 'htmlpdf/'; //Diretório para uploads
//
  //    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
  // }


?>