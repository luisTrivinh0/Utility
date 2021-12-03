<?php

require_once ('vendor/autoload.php');

use \ConvertApi\ConvertApi;

ConvertApi::setApiSecret('rpQh2HwV8jAqXv6R');
$result = ConvertApi::convert('pdf', [
        'File' => 'documentos/documentodocx2pdf.docx',
    ], 'docx'
);
$result->saveFiles('documentos/');


?>
