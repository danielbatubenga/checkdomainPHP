<meta charset="utf-8">


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
  <center><h1>Script de busca de dominio</h1></center>
  <form method="POST" action="">

 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite o seu deminio</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ex : seudominio.ao" name="dominio" aria-label="Username" aria-describedby="basic-addon1">
  
  </div>
<center>
  <style type="text/css">
  .disponivel{
 color:#99ccff; }
  .indisponivel{
    color:#ff0000;}
  </style>
<button  class="btn btn-primary" type="submit" name="enviar">Pesquisar</button></center>



  </form>


<?php if (isset($_POST['enviar'])) {?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dominio Digitado</th>
      
     <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php if (isset($_POST['dominio'])) {
       echo $_POST['dominio'];
      }  ?></td>
      
         <td>
           
           <?php

  $dom=$_POST['dominio'];
function dominio_disponivel($dominio){
  if(checkdnsrr($dominio, 'ANY') && gethostbyname($dominio) != $dominio)
          return false;
    else
          return true;}
//exemplo 1
if(dominio_disponivel($dom))
  echo "<p class='disponivel'>disponivel</p>";
else
  echo "<p class='indisponivel'> indisponivel</p>"; 

?>
         </td>
    
    <tr>
      
  </tbody>
</table>
<?php } ?>
</body>
</html>