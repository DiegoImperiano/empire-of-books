<?php
require_once('../backend/anonimo.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../assets/images/icone.png">
    <link rel="stylesheet" type="text/css" href="styles/stylesLogin.css">
    <title>Empire Of Books - Registro</title>
</head>

<body>   
    <div class=body>
        <header>
            <img src="../../assets/images/img.svg" alt="">
        </header>
        <main>
            <div class="titles">
                <h1 class="logo">Empire of <span>Books</span>.</></h1>
                   <h3 class="logo">Bem Vindo</></h3>
            </div>
            <form action="../backend/autenticarUsuario.php" method="POST">
                <div class="card">
                
                    <div class="input">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" required="required" placeholder="Informe seu login">
                    </div>
                    <div class="input">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" required="required" placeholder="Informe sua senha">
                    </div>
                    <div class="interagir">
                        <button type="submit">Entrar</button>
                        <span>Não tem cadastro? <a href="registrar.php">Registre-se</a> </span>
                    </div>
                </div>                  
            </form>
        </main>
    </div>
</body>

</html>