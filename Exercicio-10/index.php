<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/Exercicio-10/style.css">
      <title>Exercicio-10</title>
  </head>
       <body>
             <div class="form">
             <div class="title">  Exercício 10 </div>
                <h3 id="text">Entrar com 20 números e imprimir a soma
                             dos positivos e o total de números negativos
                </h3>

                <form id="form" action="/Exercicio-10/index.php" method="post">
                  <div class="input-field"></div>
                  <label for="number">Escolha 20 números:</label>
                  <input type="number" class="input" name="number" id="number" placeholder="Escolha um valor..."/>
                  <div class="underline"></div>
                  <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>

                <?php

                  if (isset($_GET['number'])) {
                    $number = explode(',', $_GET['number']);
                    $sumPositivos = 0;
                    $totalNegativos = 0;

                    for ($i = 0; $i < $count; $i++) {
                        $numero = $number[$i];

                        if ($number > 0) {
                            $sumPositivos += $number;
                        } elseif ($number < 0) {
                            $totalNegativos++;
                        }
                    }

                    echo 'Números positivos é: ' . $sumPositivos ;
                    echo 'Números negativos é: ' . $totalNegativos ;

                  }

                ?>

        </body>
</html>            