<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-300 grid justify-items-center">
<h1 class="text-2xl m-3">Página de Cadastro</h1>


<main class="w-3/4 bg-gradient-to-r from-blue-950 to-blue-700 grid justify-items-end rounded-2xl shadow-2xl h-min relative">
    <div class="absolute top-6 left-8 ">
        <h1 class=" font-thin text-5xl text-slate-50">BUS.IO</h1>
        
    </div>
    

    <form action="/cadastros/recCadastro" method="POST" class="  flex flex-col bg-slate-50 p-5 rounded-2xl shadow-md w-1/2 ">
        @csrf
        <h2 class="text-2xl font-bold font-mono text-center mb-4">Registre-se</h2>

        <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Data de Nascimento" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="text" name="email" id="email" placeholder="Email" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="text" name="telefone" id="telefone" placeholder="Telefone" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="text" name="cpf" id="cpf" placeholder="CPF" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="password" name="senha" id="senha" placeholder="Senha" class="m-1 p-1 rounded-lg border border-zinc-500">
    
    
        <input type="Submit" value="Cadastrar" class="border border-zinc-800 shadow-md rounded-lg p-1 m-1 cursor-pointer bg-gradient-to-r from-blue-400 to-cyan-400 hover:from-cyan-400 hover:to-blue-400  hover:text-slate-50 transition duration-300 delay-150 hover:delay-300 w-1/2 self-center" >
    </form>
</main>
<img src="bus.io.png" alt="bus">
<br>
<a href="/cadastros/" class=" shadow-md rounded-lg p-1 m-1 cursor-pointer bg-red-400 hover:bg-emerald-400 hover:text-slate-50 transition duration-300 delay-150 hover:delay-300 "> Voltar</a>

</body>
</html>