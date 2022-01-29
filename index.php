<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCF - Alterar senha</title>
    <link rel="shortcut icon" href="chutando_bola.png">
    <link rel="stylesheet" href="estilos.css">

    <script language="Javascript">
        function mensagem(){
            alert("Cheque seu email e altere sua senha, após isso tente efetuar o login novamente!!!");
        }
    </script>
</head>

<body id="body1">
    <div class="container">
        <div class="quadrado"></div>
        <div class="field">
            <input type="email" id="email" placeholder="Confirme seu email">
            <label for="email">Confirme seu email:</label>
        </div>

        <div class="center">
            <button class="button2" onclick="mensagem()">Continuar</button></a>
        </div>

        <div class="links2">
            <a><h2>Cancelar</h2></a>
        </div>
    </div>
</body>
</html>