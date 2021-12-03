<?php

require __DIR__.'/vendor/autoload.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/html5lib/Parser.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/src/Autoloader.php';

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

/// Make sure you have `dompdf/dompdf` in your composer dependencies.
Settings::setPdfRendererName(Settings::PDF_RENDERER_MPDF);
/// Any writable directory here. It will be ignored.
Settings::setPdfRendererPath('.');

$phpWord = IOFactory::load('documentos/documentodocx2html.docx', 'Word2007');
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML'); 
$phpWord->save('documentos/documentodocx2html.html','HTML');
//$phpWord->save('pdf/arquivodocx.pdf', 'PDF');
header('Content-Type: application/html');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="docx2html.html"');

// The PDF source is in original.pdf
readfile('documentos/documentodocx2html.html');

?>