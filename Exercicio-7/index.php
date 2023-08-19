<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-7/style.css">
    <title>Exercicio-7</title>
 </head>
       <body>
            <div class="form">
                <h1 class="title"> Exercício 7</h1> 
                <div class="text">A biblioteca de uma universidade deseja fazer
                             um algoritmo que leia o nome do livro que
                             será emprestado, o tipo de usuário (professor
                             ou aluno) e possa imprimir um recibo
                             conforme mostrado a seguir. Considerar que
                             o professor tem 10 dias para devolver o livro
                             o aluno somente 3 dias
                </div>

                <form id="form" action="/Exercicio-7/index.php" method="post">
                    <div class="input-field"></div>
                    <label for="number" class="sub">Professor(a):</label>
                    <input type="number" class="input" name="Professor" id="value" placeholder="..."/>
                    <label for="number" class="sub">Aluno(a):</label>
                    <input type="number" class="input" name="Aluno" id="value" placeholder="..."/>
                    <label for="number" class="sub">Livro:</label>
                    <input type="number" class="input" name="Livro" id="value" placeholder="..."/>
                    <div class="underline"></div>
                    <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>
