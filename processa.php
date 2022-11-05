<?php

include_once("conexao.php");

$nome = ($_POST ['nome']);
$ano = ($_POST ['ano']);
$genero = ($_POST ['genero']);
$texto = ($_POST ['texto']);

$result_usuario = "INSERT INTO Usuarios (nome, ano,genero,texto) VALUES ('$nome','$ano','$genero', '$texto')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    header("Location:Index.php");
}else{
    header("Location:Index.php");
}

?>