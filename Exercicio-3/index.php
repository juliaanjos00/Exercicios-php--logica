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
                    <label for="select">Gênero</label>  
                    <div class="ls-custom-select">
                    <select name="genero" class="ls-custom-select">
                        <option value="genero">Gênero</option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                        <option value="outro">Outro</option>
                    </select>
                    </div>
                    <div class="input-field"></div>
                    <label for="number">Idade</label>  
                    <input type="number" class=input name="idade" value="$idade"  placeholder="Idade..."/>
                    <div class="underline"></div>
                    <input type="submit"  class= "botao" name="Cadastrar" value="Cadastrar"/>
              
                     <?php                         
                        $nome= $_POST['nome'];
                        $genero= $_POST['genero'];
                        $idade= $_POST['idade'];

                        if ($idade < 25) {
                            echo $nome;
                            }  
                            else {
                            echo $nome. "--NAO ACEITA,PROJETO DESTINADO A PESSOAS DO GENERO FEMININO E MENORES DE 25 ANOS.";
                        }

                        switch($genero){
                            case 'feminino && idade < 25':
                             echo "--VOCÊ FOI ACEITA";
                             break;
                             case 'masculino':
                             echo "--NÃO ACEITA,PROJETO DESTINADO A PESSOAS NO GÊNERO FEMININO";
                             break;
                             case 'outro':
                              echo  "--NÃO ACEITA,PROJETO DESTINADO A PESSOAS NO GÊNERO FEMININO";
                        }
                                
                     ?>
                    
              
              
                </form>
             </div>
    
        </body>
</html>
