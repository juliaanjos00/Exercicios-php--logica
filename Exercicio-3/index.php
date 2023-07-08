<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-3/style.css">
    <title>Exercicio-3</title>
 </head>
        <body>
             <div class="form">
                <h1 class=title> Exercício 3<h1> 
                    <h3>Entrar com nome, sexo e idade de uma
                        pessoa. Se a pessoa for do sexo feminino e
                        tiver menos que 25 anos, imprimir nome e a
                        a mensagem: ACEITA. Caso contrário,
                        imprimir nome e a mensagem: NÃO ACEITA.
                    </h3>
                
              <form id="formulario" action="/Exercicio-3/index.php" method="POST">
                    <label for="text">Nome</label>
                    <input type="text" class= input name="nome"  id="Nome"placeholder="Nome..."/>
                    <div class="input-field"></div>
                    <label for="text">Gênero</label>   
                    <div class="ls-custom-select">  
                    <select class="ls-custom-select">
                    <option disabled selected>Gênero</option>
                    <option>Feminino</option>
                    <option>Masculino</option>
                    <option>Outro</option>
                    </select>
                    </div>
                    <div class="input-field"></div>
                    <label for="number">Idade</label>  
                    <input type="number" class=input name="idade" value="<?= $idade ?>" id="idade" placeholder="Idade..."/>
                    <div class="underline"></div>
                    <input type="submit"  class= "botao" name="Cadastrar" value="Cadastrar"/>
              </form>
             </div>
    
        </body>
</html>