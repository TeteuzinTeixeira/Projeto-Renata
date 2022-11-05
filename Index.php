<!DOCTYPE html>
<?php 
if(isset($_POST['submit']))
{
    echo($_POST['nome']);
    print_r($_POST['ano']);
    print_r($_POST['texto']);
    print_r($_POST['genero']);
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envie sua experiência</title>
</head>

<style>
    * {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: transparent;
    color: white;
    border-radius: 8px;
}

.container {
    background-image: url(Imagens/gradient-698244_1280.webp);
    background-repeat: no-repeat;
    background-size: cover;
    overflow-y: hidden;
}

.formulario {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.tabela {
    width: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 22px 16px;
}

.box_button {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

textarea {
    resize: none;
    background-color: transparent;
}

.crianca {
    height: 100vh;
}

.crianca1 {
    height: 100%;
}
</style>

<div class="container">
    <body>
        <div class="crianca">
            <img class="crianca1" src="Imagens/criancas_brincando.png">
        </div>
        <div class="formulario">
            <fieldset class="tabela">
                <form method="POST" action="processa.php">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" style="width: 285px;"><br><br>

                    <label for="ano">Ano: </label>
                    <input type="text" name="ano" placeholder="Digite seu ano" style="width: 300px;"><br><br>


                    <p>Genero: </p><br>
                    <input type="radio" id="masculino" name="genero" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="feminino" name="genero" value="feminino">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="outro" name="genero" value="outro">
                    <label for="outro">Outros</label><br><br>

                    <label for="texto"></label>
                    <textarea name="texto" id="texto" cols="36" rows="10" placeholder="Digite como foram as suas férias"></textarea><br><br>
                    <div class="box_button">
                        <input type="submit" value="Cadastrar" class="botao">
                    </div>
                </form>
            </fieldset>
        </div>
    </body>
</div>
</html>