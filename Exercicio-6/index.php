<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-6/style.css">
    <title>Exercicio-6</title>
 </head>
       <body>
            <div class="form">
                <h1 class="title"> Exercício 6</h1> 
                <div class="text">Ler um número inteiro entre 1 e 12 e escrever
                            o mês correspondente. Caso o número seja
                            fora desse intervalo, informar que não existe
                            mês com este número
                </div>

                <form id="form" action="/Exercicio-6/index.php" method="post">
                    <div class="input-field"></div>
                    <label for="number" class="sub">Mês:</label>
                    <input type="number" class="input" name="mes" id="value" placeholder="Escolha um valor..."/>
                    <div class="underline"></div>
                    <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>

                <?php

if (isset( $_POST['Mes' ])){

    $Mes= $_POST['Mes'];


    switch($Mes){
      case '1':
       echo "Janeiro";
      break;
      case '2':
       echo "Fevereiro";
      break;
      case '3':
       echo  "Março";
       case '4':
        echo "Abril";
       break;
       case '5':
        echo "Maio";
       break;
       case '6':
        echo "Junho";
       break;
       case '7':
        echo "Julho";
       break;
       case '8':
        echo "Agosto";
       break;
       case '9':
        echo "Setembro";
       break;  case '10':
        echo "Outubro";
       break;
       case '11':
        echo "Novembro";
       break;
       case '12':
        echo "Dezembro";
       break;
     }
     } 




               
             ?>
                
            </div>
       </body> 
</html>       
