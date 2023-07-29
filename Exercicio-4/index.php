<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-4/style.css">
    <title>Exercicio-4</title>
 </head>
       <body>
             <div class="form">
             <h1 class="title"> Exercício 4<h1> 
             <h3 id="text">Entrar com 3 números e imprimi-los em
                        ordem decrescente (suponha números
                        diferentes)
             </h3>

             <form id="form" action="/Exercicio-4/index.php" method="post">
                <div class="input-field"></div>
                <label for="number" class="sub">Números:</label>
                <input type="number" class="input" name="value1" id="value1" placeholder="Escolha um valor..."/>
                <input type="number" class="input" name="value2" id="value2" placeholder="Escolha um valor..."/>
                <input type="number" class="input" name="value3" id="value3" placeholder="Escolha um valor..."/>
                <div class="underline"></div>
                <input type="submit" class="button" name="enviar" value="Enviar"/> 
             </form>
             <?php   
             if (isset( $_POST['value1' ]) && isset($_POST ['value2' ]) && isset($_POST ['value3' ])){
            
               $value1 = $_POST['value1' ];
               $value2 = $_POST['value2' ];
               $value3 = $_POST['$value3' ];

               if ($value1 >= $value2 && $value1 >= $value3){
                echo "$value1 $value2 $value3" ;
               }

               if ($value2 >= $value1 && $value2 >= $value3){
                  echo "$value2 $value1 $value3" ;
               }

               if ($value3 >= $value1 && $value3 >= $value2){
                  echo "$value3 $value1 $value2" ;
               }
               
            }
               ?> 


             
      </body>         

</html>                    
              
                