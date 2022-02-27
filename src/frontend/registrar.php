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
    <!-- Icones das redes sociais -->
    <link rel="stylesheet" href="../../assets/fonts/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/stylesLogin.css">
    <title>Empire Of Books - Registro</title>
</head>

<body>
    <div class="body">
        <header>
            <div class="titles">
                <h1 class="logo">Empire of <span>Books</span>.</></h1>
            </div>
            <img src="../../assets/images/img.svg" alt="">
        </header>
        <main>
            <div class="titles">
                <h3 class="logo">Cadastre-se</></h3>
            </div>
            <form action="../backend/registrarUsuario.php" method="POST">
                <div class="card">
                    <div class="input">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" required="required" placeholder="Informe seu nome">
                    </div>
                    <div class="input">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" required="required" placeholder="Informe seu endereço">
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required="required" placeholder="Informe seu email">
                    </div>
                    <div class="input">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" required="required" placeholder="Informe seu numero de telefone">
                    </div>
                    <div class="input">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" required="required" placeholder="Informe um login">
                    </div>
                    <div class="input">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" required="required" placeholder="Informe uma senha">
                    </div>
                    <div class="input">
                        <label for="confirmar_senha">Confirmar Senha</label>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" required="required" placeholder="Confirme a senha anterior">
                    </div>
                    <div class="interagir">
                        <button type="submit">Cadastrar</button>
                        <a href="login.php">Voltar</a>
                    </div>
                </div>
            </form>
        
        </main>
    </div>
</body>

</html>