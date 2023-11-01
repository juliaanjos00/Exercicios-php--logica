<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-11/style.css">
    <title>Exercicio-11</title>
 </head>
       <body>
            <div class="form">
                <h1 class="title"> Exercício 11</h1> 
                <div class="text">Criar um algoritmos que imprima a tabuada
                                   de um número.
                </div>

                <form id="form" action="/Exercicio-11/index.php" method="post">
                    <div class="input-field"></div>
                    <label for="number" class="sub">Número:</label>
                    <input type="number" class="input" name="number" id="number" placeholder="Escolha um valor..."/>
                    <div class="underline"></div>
                    <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>
                <?php
                    if (isset($_POST["number"])) {
                        $number = $_POST["number"];
                        echo "Tabuada $number:";
                        for ($i = 1; $i <= 10; $i++) {
                            $resuls = $number * $i;
                            echo "$number  x   $i $results";
                        }
                    }
             ?>
        </body>
</html>