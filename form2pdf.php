<?php
  
  require_once 'lib/gh/bootstrap.php';  
  require __DIR__.'/vendor/autoload.php';
  require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/html5lib/Parser.php';
  require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
  require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-svg-lib-master/src/autoload.php';
  require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/src/Autoloader.php';


$_GET = (object)$_GET;

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('documentos/documento.docx');


$imagens = array("imagem" => "imagens/imagem1.jpg" , "ratio" => false);

$templateProcessor->cloneBlock('bloco', 3, true, true);
$variaveis = $templateProcessor->getVariableCount();
foreach($variaveis as $destino => $quantidade){
  $posicao = strpos($destino . ":", ":");
  $campo_ash   = substr($destino, 0, $posicao);
  $posicao = strpos($campo_ash . "#", "#");
  $campo_limpo = substr($campo_ash, 0, $posicao);
  if(substr($campo_limpo, 0, 6) == "imagem"){
    if (isset($imagens[$campo_limpo])){
      $templateProcessor->setImageValue($campo_ash, $imagens[$campo_limpo]);
    } else {
      $templateProcessor->setValue($destino, "");    
    }
  } else {
      $conteudo = (isset($_GET->{$campo_limpo}))
                ? $_GET->{$campo_limpo}
                : "";
      $templateProcessor->setValue($destino, $conteudo);      
    }
}


$templateProcessor->saveAs('documentos/documento_final.docx');


use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

/// Make sure you have `dompdf/dompdf` in your composer dependencies.
Settings::setPdfRendererName(Settings::PDF_RENDERER_MPDF);
/// Any writable directory here. It will be ignored.
Settings::setPdfRendererPath('.');

$temp = \PhpOffice\PhpWord\IOFactory::load('documentos/documento_final.docx');
$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($temp , 'PDF');
$xmlWriter->save('documentos/documento_final.pdf', TRUE);
// We'll be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="form2pdf.pdf"');

// The PDF source is in original.pdf
readfile('documentos/documento_final.pdf');

  //------------------------------------------------------------------------------
  //Função para varrer listando uma array
 // function print_t($varray = array()){
 //   $html = "<table border='1px'>
 //              <thead>
 //                <tr>
 //                  <th>key</th>
 //                  <th>value</th>
 //                </tr>
 //              </thead>
 //              <tbody>";
 //   if (is_object($varray)) $varray = (array)$varray;
 //   if (is_array($varray)){
 //     foreach($varray as $key => $value){
 //       if (is_array($value) or is_object($value)){
 //         $value = print_t($value);
 //       } else {
 //         $value = htmlentities($value);
 //       };
 //       $html .= "<tr>
 //                   <td>$key</td>
 //                   <td>$value</td>
 //                 </tr>";
 //     }
 //   }
 //   $html .= "</tbody>
 //           </table>";
 //   return $html;
 // }

?>