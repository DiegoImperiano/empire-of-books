<?php
require_once('anonimo.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="icone/icone.png">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <title>Empire Of Books - Registro</title>
</head>

<body id="semtabela">
    <div id="container">
        <div id="header" title="Empire Of Books">
            <h1>Empire Of Books</h1>
        </div>
    </div>
    <div>
        <div>
            <div>
                <div>
                    <div>
                        Registre-se
                    </div>
                    <div >
                        <form action="registrar_usuario.php" method="POST">
                            <div>
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" required="required" placeholder="Informe seu nome">
                            </div>
                            <div>
                                <label for="endereco">Endereço</label>
                                <input type="text" name="endereco" id="endereco" required="required" placeholder="Informe seu endereço">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required="required" placeholder="Informe seu email">
                            </div>
                            <div>
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" required="required" placeholder="Informe seu numero de telefone">
                            </div>
                            <div>
                                <label for="login">Login</label>
                                <input type="text" name="login" id="login" required="required" placeholder="Informe um login">
                            </div>
                            <div>
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" required="required" placeholder="Informe uma senha">
                            </div>
                            <div>
                                <label for="confirmar_senha">Confirmar Senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" required="required" placeholder="Confirme a senha anterior">
                            </div>
                            <div class="text-right">
                                <button type="submit">Cadastrar</button>
                                <a href="login.php">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>