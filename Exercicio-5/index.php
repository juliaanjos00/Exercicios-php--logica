<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/Exercicio-5/style.css">
      <title>Exercicio-5</title>
  </head>
       <body>
             <div class="form">
             <div class="title">  Exercício 5 </div>
                <h3 id="text">Ler 3 números, os possíveis lados de um
                  triângulo, e imprimir a classificação de
                  acordo com tamanho dos lados
                </h3>

                <form id="form" action="/Exercicio-5/index.php" method="post">
                  <div class="input-field"></div>
                  <label for="number">Escolha os números:</label>
                  <input type="number" class="input" name="ladoA" id="ladoA" placeholder="Escolha um valor..."/>
                  <input type="number" class="input" name="ladoB" id="ladoB" placeholder="Escolha um valor..."/>
                  <input type="number" class="input" name="ladoC" id="ladoC" placeholder="Escolha um valor..."/>
                  <div class="underline"></div>
                  <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>
             
                 <?php
                  if(isset($_POST['ladoA']) && isset($_POST['ladoB']) && isset($_POST['ladoC'])) {
                      $ladoA = $_POST['ladoA'];
                      $ladoB= $_POST['ladoB'];
                      $ladoC = $_POST['ladoC'];
                        
                      if (($ladoA == $ladoB) && ($ladoB == $ladoC)) {
                              echo  'TRIÂNGULO EQUILATERO';
                          } 
                          else if (($ladoA!= $ladoB )&& ($ladoA != $ladoC) && ($ladoB != $ladoC)) {
                              echo 'TRIÂNGULO ESCALENO';
                          } 
                          else {
                              echo 'TRIÂNGULO ISÓSCELES';
                          }
                      }
                
                 ?>
               
            </div>
       </body>  
</html>
