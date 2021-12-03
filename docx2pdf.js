var docxConverter = require('docx-pdf');

docxConverter('D:/xampp/htdocs/testes/template.docx','D:/xampp/htdocs/testes/template.pdf',function(err,result){
  if(err){
    console.log(err);
  }
  console.log('result'+result);
});