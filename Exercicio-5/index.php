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
             <div class="title"> <h1> Exercício 5<h1> </div>
             <h3 id="text">Ler 3 números, os possíveis lados de um
                 triângulo, e imprimir a classificação de
                 acordo com tamanho dos lados
             </h3>

             <form id="form" action="/Exercicio-5/index.php" method="post">
                <div class="input-field"></div>
                <label for="number">Escolha os números:</label>
                <input type="number" class="input" name="value1" id="value1" placeholder="Escolha um valor..."/>
                <input type="number" class="input" name="value2" id="value2" placeholder="Escolha um valor..."/>
                <input type="number" class="input" name="value3" id="value3" placeholder="Escolha um valor..."/>
                <div class="underline"></div>
                <input type="submit" class="button" name="enviar" value="Enviar"/> 
             </form>