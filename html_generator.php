<?php
require_once 'lib/gh/bootstrap.php';  
require __DIR__.'/vendor/autoload.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/html5lib/Parser.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once 'D:/xampp/htdocs/testes/Utility/vendor/dompdf/dompdf/src/Autoloader.php';


// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText('
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>INDEX GENERATOR</title>
  </head>
  <body style="background-color: rgb(179, 250, 176); font-family:Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif; color: black; font-size: large; letter-spacing: 3px;">
    <div id="conteudo"></div>
      <center><h1 style="background-color: yellowgreen;">INDEX GENERATOR</h1></center><br>
    </div>
    <div id="menu">
      <ul style="list-style: hiragana;">
        <li style="margin-left: 45%;"><a href="option1.html" style="border-left: 4px solid yellowgreen;color: black; background-color: white; padding: 3px; margin: 3px;">Opção 1</a></li>
        <li style="margin-left: 45%;"><a href="option2.html" style="border-left: 4px solid yellowgreen;color: black; background-color: white; padding: 3px; margin: 3px;">Opção 2</a></li>
        <li style="margin-left: 45%;"><a href="option3.html" style="border-left: 4px solid yellowgreen;color: black; background-color: white; padding: 3px; margin: 3px;">Opção 3</a></li>
        <li style="margin-left: 45%;"><a href="option4.html" style="border-left: 4px solid yellowgreen;color: black; background-color: white; padding: 3px; margin: 3px;">Opção 4</a></li>
        <li style="margin-left: 45%;"><a href="option5.html" style="border-left: 4px solid yellowgreen;color: black; background-color: white; padding: 3px; margin: 3px;">Opção 5</a></li>
        <li style="margin-left: 45%;"><a href="option6.html" style="border-left: 4px solid yellowgreen;color: black; background-color: white; padding: 3px; margin: 3px;">Opção 6</a></li>
      </ul>
    </div>
  </body>
  <footer style="background-color: rgb(0, 0, 0, 0.7); color: white; text-align: center;margin-top: 100px;">todos os direitos reservados ao composer® ©</footer>
</html>
');


// Saving the document as HTML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
$objWriter->save('documentos/htmlgenerated.html');
header('Content-Type: application/html');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="htmlgenerated.html"');

// The PDF source is in original.pdf
readfile('documentos/htmlgenerated.html');

?>