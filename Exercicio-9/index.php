<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/Exercicio-9/style.css">
      <title>Exercicio-9</title>
  </head>
       <body>
            <div class="container">
             <div class="form">
             <div class="title">  Exercício 9 </div>
                <h3>Entrar com o número de vezes que se deseja
                     imprimir a palavra SOL e imprimir
                </h3>
                <form action="/Exercicio-9/index.php" method="post">
                  <div class="input-field"></div>
                  <label for="number">Escolha um número</label>
                  <input type="number" class="input" name="number" id="number" placeholder="Escolha um valor..."/> 
                  <div class="underline"></div>
                  <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>
                
                    <?php
                         if (isset($_POST["number"])) {
                              $repeat = $_POST["number"];

                              if (is_numeric($repeat)) {
                              for ($i = 0; $i < $repeat; $i++) {
                                   echo  "<p>Sol</p>";
                              }
                              } 
                         }    
                    ?>


               </div> 
            </div>
       </body>  
</html>
