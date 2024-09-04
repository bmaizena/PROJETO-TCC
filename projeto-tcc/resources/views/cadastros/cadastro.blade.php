<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Página de Cadastro</h1>

<form action="/cadastros/recCadastro" method="POST">
    @csrf 

    <input type="text" name="nome" id="nome" placeholder="Nome Completo">
    <hr>

    <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Data de Nascimento">
    <hr>

    <input type="text" name="email" id="email" placeholder="Email">
    <hr>

    <input type="text" name="telefone" id="telefone" placeholder="Telefone">
    <hr>

    <input type="text" name="endereco" id="endereco" placeholder="Endereço">
    <hr>

    <input type="text" name="cpf" id="cpf" placeholder="CPF">
    <hr>

    <input type="password" name="senha" id="senha" placeholder="Senha">
    <hr>

    <input type="Submit" value="Cadastrar"> 
</form>
<br>
<a href="/cadastros/"> Voltar</a>
</body>
</html>