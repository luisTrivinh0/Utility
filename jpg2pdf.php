<?php
require_once ('vendor/autoload.php');

use \ConvertApi\ConvertApi;

//get api key: https://www.convertapi.com/a/si
ConvertApi::setApiSecret('rpQh2HwV8jAqXv6R');

$result = ConvertApi::convert('pdf', ['File' => 'documentos/imagem2pdf.jpg']);

# save to file
$result->getFile()->save('documentos/imagem2pdf.pdf');
?>