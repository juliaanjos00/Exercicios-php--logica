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
                    <input type="number" class="input" name="value" id="value" placeholder="Escolha um valor..."/>
                    <div class="underline"></div>
                    <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>
                
            </div>
       </body> 
</html>       