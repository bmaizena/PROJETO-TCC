<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Principal</h1>
    
    <hr>
        <a href="/cadastros/cadastro">Cadastro</a>
    <hr>

    <h2>Listagem de Clientes</h2>

    @foreach ($clientes as $cliente)
    <li> {{ $cliente->nome }} -  {{$cliente->dt_nasc}} - {{ $cliente->email }} - {{$cliente->telefone}} - {{$cliente->endereco}} - {{$cliente->cpf}} - {{$cliente->senha}}
    
    </li>
    @endforeach
</body>
</html>