<?php

require_once 'vendor/autoload.php'; //autoload das classes

use PhpOffice\PhpWord\PhpWord; //usando a classe PhpWord
use PhpOffice\PhpWord\IOFactory; //usando a classe IOFactory

$phpWord = new PhpWord(); //instanciando um objeto PhpWord

$section = $phpWord->addSection(); //inserindo uma nova sessão no documento

$section->addText('<html>
                     <head>
                     <style type="text/css">
                     .tg  {border-collapse:collapse;border-spacing:0;}
                     .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                       overflow:hidden;padding:10px 5px;word-break:normal;}
                     .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                       font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                     .tg .titulo{background-color:#9698ed;border-color:inherit;text-align:left;vertical-align:top}
                     .tg .azul claro{background-color:#cbcefb;border-color:inherit;text-align:left;vertical-align:top}
                     .tg .branco{border-color:inherit;text-align:left;vertical-align:top}
                     </style>
                     </head>
                     <body>
                       <table class="tg">
                         <thead>
                           <tr>
                             <th class="titulo" style="vertical-align: middle;text-align: center;">Banda/Cantor</th>
                             <th class="titulo" style="vertical-align: middle;text-align: center;">Nome</th>
                             <th class="titulo" style="vertical-align: middle;text-align: center;">Estilo</th>
                             <th class="titulo" style="vertical-align: middle;text-align: center;">Melhor Música</th>
                             <th class="titulo" style="vertical-align: middle;text-align: center;">Álbum mais vendido</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;"><img src="https://static.dw.com/image/39219505_303.jpg" width="200" height="110"></td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">The Beatles</td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">Tudo</td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">Yesterday - Help</td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">Sgt Pepper Lonely Hearts Club Band(1967)</td>
                           </tr>
                           <tr>
                             <td class="branco" style="vertical-align: middle;text-align: center;"><img src="https://cdn.falauniversidades.com.br/wp-content/uploads/2019/06/michael-jackson31-768x469.jpg" width="200" height="140"></td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Michael Jackson</td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Pop/Rock/Blues</td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Love Never Felt So Good- XScape</td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Thriller(1982)</td>
                           </tr>
                           <tr>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;"><img src="https://conteudo.imguol.com.br/c/entretenimento/a7/2018/01/17/o-cantor-frank-sinatra-1516217743700_v2_450x337.jpg" width="200" height="160"></td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">Frank Sinatra</td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">Jazz/Pop Clássico</td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">That’s Life - Nothing but the best</td>
                             <td class="azul claro" style="vertical-align: middle;text-align: center;">That’s Life(1966)</td>
                           </tr>
                           <tr>
                             <td class="branco" style="vertical-align: middle;text-align: center;"><img src="https://livreopiniaoportal.files.wordpress.com/2015/01/elvis-presley-007.jpg" width="200" height="160"></td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Elvis Presley</td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Rock/Country</td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Always On My Mind - Separate Ways</td>
                             <td class="branco" style="vertical-align: middle;text-align: center;">Elvis Christmas Album(1957)</td>
                           </tr>
                         </tbody>
                      </table>
                     </body>
                   <html>'); 
$objWriter = IOFactory::createWriter($phpWord, 'HTML'); //definindo o tipo de documento como HTML
$objWriter->save('documentos/arquivohtml2pdf.html'); //salvando o documento como HTML

header("Location: html2pdf.php");

?>
