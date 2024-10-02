<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body{
            margin:0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
        }

        
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-300 grid justify-items-center">


<main id="mainCad" class=" bg-gradient-to-r from-blue-950 to-blue-700 grid justify-items-end rounded-2xl shadow-2xl relative border border-slate-50 mt-9">
    <div class="absolute top-6 left-8 ">
        <h1 class="font-thin text-6xl text-slate-50 ml-3">BUS.IO</h1>
        <p class="font-thin text-lg text-slate-50 ml-1">Seu ônibus na palma da sua mão</p>
    </div>
    <div id="imagem"class="absolute top-12 left-10">
        <img src="/bus.io.png" alt="bus" class="w-10/12 ml-1 mt-2">
    </div>


    <div class="absolute bottom-2 left-2" id="acess">
        <a href="/cadastros/login" class="font-thin text-slate-50 ml-1 hover:text-green-500 text-xs">Acesso Restrito</a>
    </div>

    
    

    <form id="formulario"action="/cadastros/recCadastro" method="POST" class=" flex flex-col bg-slate-50 p-5 rounded-2xl shadow-md w-7/12 ml-4 ">
        @csrf
        <h2 class="text-2xl font-bold font-mono text-center mb-4">Cadastre-se</h2>

        <input type="text" name="nome" id="nome" placeholder="Nome Completo" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="date" name="dt_nasc" id="dt_nasc" placeholder="Data de Nascimento" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="email" name="email" id="email" placeholder="Email" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="number" name="telefone" id="telefone" placeholder="Telefone" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="text" name="endereco" id="endereco" placeholder="Endereço" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="number" name="cpf" id="cpf" placeholder="CPF" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="password" name="senha" id="senha" placeholder="Senha" required class="m-1 p-1 rounded-lg border border-zinc-500 w-4/6 self-center">
    
    
        <input type="Submit" value="Cadastrar" class="border border-zinc-800 shadow-md rounded-lg p-1 mb-0 m-1 cursor-pointer bg-gradient-to-r from-blue-400 to-cyan-400 hover:from-cyan-400 hover:to-blue-400  hover:text-slate-50 transition duration-300 delay-150 hover:delay-300 w-1/2 self-center" >
        <p class="self-center">ja tem uma conta? <a href="/" class=" hover:text-cyan-500"><b>Entrar</b></a></p> 
        <br>
        <p class="self-center pb-2 hover:text-cyan-500"><a href="/"><b>Página Inicial</b></a></p>

        

    </form>
</main>

@include('components.flashmessages')

<br>


</body>
</html>

<script>
    const target = document.getElementById("alertDiv");
    function hide(){
        target.style.opacity = '0'
        target.style.display = 'none';
    }
    window.onload = setInterval(() => hide(), 3000)
</script>