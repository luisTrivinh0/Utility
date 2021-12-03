<?php

// chamando os arquivos necessários do DOMPdf
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/html5lib/Parser.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/src/Autoloader.php';

// definindo os namespaces
Dompdf\Autoloader::register();
ini_set('memory_limit', '-1');
set_time_limit(600);
use Dompdf\Dompdf;

// inicializando o objeto Dompdf
$arquivo = 'documentos/arquivohtml2pdf.html';

$dompdf = new Dompdf(["enable_remote" => true]);

$html = file_get_contents($arquivo);
//
$dompdf->loadHtml($html);
//
$dompdf->setPaper('A4', 'landscape');
//
$dompdf->render();
//
$dompdf->stream();
?>