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
        <div class="slider">
        <div class="titles">LIVROS DISPONÍVEIS</div>
       <div class="slides">
         <input type="radio" class="radio" name="radio-btn" id="radio1">
         <input type="radio" class="radio" name="radio-btn" id="radio2">
         <input type="radio" class="radio" name="radio-btn" id="radio3">
         <input type="radio" class="radio" name="radio-btn" id="radio4">
         <input type="radio" class="radio" name="radio-btn" id="radio5">
         <input type="radio" class="radio" name="radio-btn" id="radio6">
         <input type="radio" class="radio" name="radio-btn" id="radio7">
         <input type="radio" class="radio" name="radio-btn" id="radio8">
         <input type="radio" class="radio" name="radio-btn" id="radio9">
         <input type="radio" class="radio" name="radio-btn" id="radio10">

                  <div class="slide first">
                    <img src="./img1">
                   </div>

                  <div class="slide">
                    <img src="./img2"/>
                   </div>

                  <div class="slide">
                    <img src="./img3"/>
                   </div>

                  <div class="slide">
                    <img src="./img4" />
                   </div>

                  <div class="books">
                    <img src="./img5"/>
                   </div>

                  <div class="slide">
                    <img src="./img6"/>
                   </div>

                  <div class="slide">
                    <img src="./img7"/>
                   </div>
                     
                  <div class="slide">
                    <img src="./img8"/>
                   </div>

                  <div class="slide">
                    <img src="./img9" />
                   </div>

                  <div class="slide">
                    <img src="./img10" />
                   </div>

                   <div class="navigation-bar">
                     <label class= "manual-btn" for="radio1"></label>
                     <label class= "manual-btn" for="radio2"></label>
                     <label class= "manual-btn" for="radio3"></label>
                     <label class= "manual-btn" for="radio4"></label>
                     <label class= "manual-btn" for="radio6"></label>
                     <label class= "manual-btn" for="radio7"></label>
                     <label class= "manual-btn" for="radio8"></label>
                     <label class= "manual-btn" for="radio9"></label>
                     <label class= "manual-btn" for="radio10"></label>
                  </div>
                  
                </div>  
               </div>

              
               <div class="form">
                <h1 class="title"> Exercício 7</h1> 
                <div class="text">A biblioteca de uma universidade deseja fazer
                             um algoritmo que leia o nome do livro que
                             será emprestado, o tipo de usuário (professor
                             ou aluno) e possa imprimir um recibo
                             conforme mostrado a seguir. Considerar que
                             o professor tem 10 dias para devolver o livro
                             o aluno somente 3 dias. </div>
                <form id="form" action="/Exercicio-7/index.php" method="post">
                    <div class="input-field"></div>
                    <label for="text" class="sub">Professor(a):</label>
                    <input type="text" class="placeholder" name="Professor" id="value" placeholder="..."/>
                    <label for="text" class="sub">Aluno(a):</label>
                    <input type="text" class="placeholder" name="Aluno" id="value" placeholder="..."/>
                    <label for="text" class="sub">Livro:</label>
                    <input type="text" class="placeholder" name="Livro" id="value" placeholder="..."/>
                    <div class="underline"></div>
                    <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>
                </div>
              

        