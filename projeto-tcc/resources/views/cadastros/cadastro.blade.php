<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding: 0;
        }
        main {
            min-width: 900px;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-300 grid justify-items-center">


<main class=" bg-gradient-to-r from-blue-950 to-blue-700 grid justify-items-end rounded-2xl shadow-2xl  relative border border-slate-50 mt-9">
    <div class="absolute top-6 left-8 ">
        <h1 class="font-thin text-6xl text-slate-50 ml-3">BUS.IO</h1>
        <p class="font-thin text-lg text-slate-50 ml-1">Seu ônibus na palma da sua mão</p>
    </div>
    <div class="absolute top-12 left-12">
        <img src="/bus.io.png" alt="bus" class="w-10/12 ml-1 mt-2">
    </div>
    

    <form action="/cadastros/recCadastro" method="POST" class="  flex flex-col bg-slate-50 p-5 rounded-2xl shadow-md w-7/12 ml-4">
        @csrf
        <h2 class="text-2xl font-bold font-mono text-center mb-4">Registre-se</h2>

        <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Data de Nascimento" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="text" name="email" id="email" placeholder="Email" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="text" name="telefone" id="telefone" placeholder="Telefone" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="text" name="cpf" id="cpf" placeholder="CPF" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="password" name="senha" id="senha" placeholder="Senha" class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="Submit" value="Cadastrar" class="border border-zinc-800 shadow-md rounded-lg p-1 mb-0 m-1 cursor-pointer bg-gradient-to-r from-blue-400 to-cyan-400 hover:from-cyan-400 hover:to-blue-400  hover:text-slate-50 transition duration-300 delay-150 hover:delay-300 w-1/2 self-center" >
        <p class="self-center">ja tem uma conta? <a href="/cadastros/"><b>Entrar</b></a></p>
    </form>
</main>

<br>


</body>
</html>