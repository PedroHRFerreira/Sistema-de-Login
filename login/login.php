<?php

include_once 'config/config.php';

if (isset($_POST['submit']))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['confirmarSenha'];
    $data_nasc = $_POST['dataNascimento'];
    $cep = $_POST['cep'];

    $result = mysqli_query($conexaoM,
        "INSERT INTO Usuario(nome, email, senha, conf_senha, data_nasc, cep)
         VALUES('$nome', '$email', '$senha', '$conf_senha', '$data_nasc', '$cep')");
} else
{
    $selectedLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if(strpos($selectedLanguage, 'pt-BR') !== false)
    {
        print"O método $_POST não definido ou é nulo";

    } else
    {
        print"The $_POST method is not defined or is null :(";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<main>
    <div class="section">
        <div class="content">
            <h1 class="title-login">Cadastro de login</h1>
            <div class="content_form">
                    <form class="form_content" action="login.php" method="POST">
                        <div class="content_modal">
                            <label class="text-login" for="nome">Nome:</label>
                            <input  class="input-login" type="text" id="nome" name="nome"  placeholder="Digite seu nome" >


                            <label class="text-login" for="email">Email:</label>
                            <input class="input-login" type="email" id="email" name="email"  placeholder="Digite seu email" >


                            <label class="text-login" for="senha">Senha:</label>
                            <input class="input-login" type="password" id="senha" name="senha"  placeholder="Digite sua senha" >


                            <label class="text-login"  for="confirmarSenha">Confirmar Senha:</label>
                            <input class="input-login" type="password" id="confirmarSenha" name="confirmarSenha"  placeholder="Digite novamente sua senha">


                            <label class="text-login" for="dataNascimento">Data de Nascimento:</label>
                            <input class="input-login" type="date" id="dataNascimento" name="dataNascimento"  >


                            <label class="text-login" for="cep">CEP:</label>
                            <input class="input-login" type="number" id="cep" name="cep"  placeholder="Informe seu cep" >


                            <button class="input-button" type="submit" name="submit">Cadastrar</button>
                        </div>
                    </form>
                    <a class="link" href="/index.php">voltar</a>
                    <img src="/image/de-volta.png" alt="Voltar" />
            </div>
        </div>
    </div>
</main>

</body>
<script src="script.js"></script>
</html>