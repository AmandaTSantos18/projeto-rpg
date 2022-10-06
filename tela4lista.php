<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: tela3login.html");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>

    <link rel="stylesheet" href="css/estilotela4lista.css">
    
        <style>
            body
            {
                background-repeat: no-repeat;
                background-size: cover;
                
                background-image:url("img/fundo.png");
    
            }
        </style> 
</head>
<body>
    <img src="img/logo.png" id="logo">

    <a href="ficha.html">
        <div class="botao_criar alinhado">
            <img src="img/maiszinho.png" id="maiszinho"> 
            NOVO <br> PERSONAGEM
        </div>
    </a>

    <select class="epadrao" id="qual">
        <option value="seu">SEUS PERSONAGENS</option>
        <option value="padrao">PERSONAGENS PADRÃO</option>
    </select>

    <a href="ficha.html">
        <div id="lista">
            <div class="personagem"> 
                <img src="img/mais2.png" id="mais2">
                CRIAR NOVO PERSONAGEM
            </div>
           
        </div>
    </a>
</body>
<script>

</script>
</html>