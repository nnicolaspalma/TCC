<?php

    session_start();

    if(!isset($_SESSION['id_usuario'])):

        header("location: index.php");
        exit;

    endif;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Logado</title>
    <link rel="stylesheet" href="style/area_privada.css">
    <link rel="shortcut icon" href="imagens/icon/faicon.jpg">
</head>
<body>


<div id="cortes">

<h1>Colocar Link handpage</h1>

<a href="sair.php">Deslogar</a>

</div>

</body>
</html>