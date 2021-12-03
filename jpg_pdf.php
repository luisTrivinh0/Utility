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
$arquivo_novo = 'documentos/imagem2pdf.jpg';

echo rename($arquivo_antigo, $arquivo_novo); // Resultado: TRUE 

echo '<form action="jpg2pdf.php" method="post">
Faça o Download do arquivo em PDF:
<input type="submit" value="Download"/>
</form>';
?>