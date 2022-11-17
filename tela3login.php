<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilotela3login.css">
    
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
    <?php
        session_start();
        $_SESSION['loggedin'] = false;
    ?>
    <img src="img/logo.png" id="logo">
    
    <form action="login.php" method="POST" class="form">
        <input type="text" class="input" name="email" placeholder="E-MAIL" maxlength="50" required>
        <input type="password" class="input" name="senha" placeholder="SENHA" maxlength="50" required>

        <input type="submit" value="LOGIN" class="botao_login alinhado">
    </form>

    <div class="logos"> 
        <img src="img/facebook.png">
        &nbsp;
        <img src="img/google.png">
    </div>

</body>
</html>