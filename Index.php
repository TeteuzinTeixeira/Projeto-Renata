<?php 
if(isset($_POST['submit']))
{
    echo($_POST['nome']);
    print_r($_POST['ano']);
    print_r($_POST['texto']);
    print_r($_POST['genero']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos envie suas experiências</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="imagem">    
            <img class="crianca"src="Imagens/criancas_brincando.png" alt="imagem">
        </div>

        <div class="containerForm">
            <form method="POST" action="processa.php">
                <label for="nome">Nome<br>
                <i class="fa-solid fa-user"></i></label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" style="width: 325px;"><br><br>

                <label for="ano">Ano<br>
                <i class="fa-solid fa-book"></i></label>
                <input type="text" id="ano" name="ano" placeholder="Digite seu ano" style="width: 325px;"><br><br>


                <p>Genero</p>
                <input type="radio" id="masculino" name="genero" value="masculino" checked>
                <label for="masculino" class="radio">Masculino</label>
                <input type="radio" id="feminino" name="genero" value="feminino">
                <label for="feminino" class="radio">Feminino</label>
                <input type="radio" id="outro" name="genero" value="outro"> 
                <label for="outro" class="radio">Outros</label><br><br>

                <label for="texto"></label>
                <textarea name="texto" id="texto" cols="36" rows="10" placeholder="Digite como foram as suas férias"></textarea><br><br>
                <div class="box_button">
                    <input type="submit" value="Cadastrar" class="botao">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>