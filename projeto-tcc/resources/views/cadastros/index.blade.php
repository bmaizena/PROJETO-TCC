<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
   
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;

}

header {
    color: white;
    padding: 1rem 0;
    text-align: center;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

nav ul li a:hover {
    text-decoration: underline;
}

.hero {
    padding: 50px 20px;
    background: url('background.jpg') no-repeat center center/cover;
    color: white;
    display: flex; 
}

.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.hero p {
    font-size: 1.2rem;
}

main {
    padding: 20px;
}

.content {
    margin-bottom: 40px;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.content h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #333;
}

.content p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #666;
}

.contact form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact input, 
.contact textarea {
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 1rem;
}

.contact button:hover {
    background-color: #45a049;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    margin-top: 20px;
}

@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
    }

    .hero h1 {
        font-size: 2rem;
    }

    .content h2 {
        font-size: 1.5rem;
    }

    .contact form {
        width: 100%;
    }

    #menuFunc {
        flex-direction: column
    }

}
    </style>
</head>
<body>

    <header class="pt-0 bg-gradient-to-r from-blue-950 to-blue-700 hover:from-blue-800 hover:to-blue-600 relative">
        <nav class="bg-blue-950 border-b-2 h-16">
            <ul class="pt-4">
                <li id="logo" class="absolute top-2 left-2"><img src="/logo-bus-cortado.png" alt="onibus" width="65px"></li>
                <li id="logo-text" class="absolute left-20 top-4 text-2xl ">BUS.IO</li>
                <li><a href="#home" class=" hover:text-slate-700 transition duration-150 ease-in-out">Início</a></li>

                <li><a href="#historia" class=" hover:text-slate-700 transition duration-150 ease-in-out ">História do Tema</a></li>

                <li><a href="#ideia" class=" hover:text-slate-700 transition duration-150 ease-in-out ">Como Surgiu a Ideia</a></li>

                <li><a href="/cadastros/cadastro"  class=" hover:text-slate-700 transition duration-150 ease-in-out ">Cadastro</a></li>
            </ul>
        </nav>
        <section id="home" class="hero">
            <img src="/bus-img-1.jpg" alt="Imagem ônibus" class="w-1/3 rounded-3xl ml-14 mt-7">
            <div class="ml-32 mt-10 font">
                <h1 class="text-9xl">BUS.IO</h1>
                <br>
                <p>Explore nossa jornada e saiba mais sobre o desenvolvimento deste projeto.</p>
            </div>
        </section>
    </header>

    <main>
        <section id="historia" class="content">
            <h2>Sobre o Aplicativo</h2>
                <p class="text-justify">
        O aplicativo é uma solução completa para facilitar a vida dos usuários
        que dependem do transporte público. Ele oferece recursos como localização dos
        pontos de ônibus, consulta dos próximos horários e valores de passagem, previsão de
        chegada do ônibus. Além disso, os usuários podem carregar um passe mensalmente,
        válido para utilizar em qualquer ônibus de qualquer cidade, tornando o processo mais
        conveniente e econômico
                </p>
        </section>

        <section id="ideia" class="content">
            <h2>Como Surgiu a Ideia</h2>
            <p>A necessidade de um aplicativo para os usuários se
                mostrou indispensável, Através da pesquisa, diagnostica-se que a maioria dos usuários
                de transporte público, enfrentam ou já enfrentaram dificuldade no uso dos ônibus, como o
                fato de chegar atrasado ou não saber qual o horário exato que irá passar no ponto de
                parada</p>
        </section>
    </main>

    <div class="flex flex-row justify-center" id="menuFunc">

        <div class="w-auto h-auto bg-gradient-to-r from-blue-900 to-blue-700 m-3 p-2 rounded-lg shadow-xl text-center">
            <h1><b>Localização de Pontos de Ônibus</b></h1>
            <p>Os usuários podem facilmente encontrar os
                pontos de ônibus mais próximos de sua localização atual usando o aplicativo.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-400 to-cyan-400 m-3 p-2  rounded-lg shadow-xl text-center">
            <h1><b>Consulta de Horários</b></h1>
            <p>Os horários de partida e chegada dos ônibus estão disponíveis
            para consulta, permitindo que os usuários planejem suas viagens com antecedência.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-400 to-cyan-400 m-3 p-2 text-center rounded-lg shadow-xl">
            <h1><b>Valores de Passagem</b></h1>
            <p>Os preços das passagens de ônibus são exibidos no aplicativo,
            ajudando os usuários a gerenciarem seus gastos com transporte.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-400 to-cyan-400 m-3 p-2 text-center rounded-lg shadow-xl">
            <h1><b>Compra de Passagem Online</b></h1>
            <p>O aplicativo oferece a conveniência de comprar
            passagens de ônibus diretamente pelo smartphone, eliminando a necessidade de
            esperar em filas.
        </p>
        </div>
        
        <div class="w-auto h-auto bg-gradient-to-r from-blue-400 to-cyan-400 m-3 p-2 text-center rounded-lg shadow-xl">
            <h1><b>Passe Mensal</b></h1>
            <p> Os usuários têm a opção de carregar um passe mensal, válido para
            uso em qualquer ônibus de qualquer cidade atendida pelo serviço, proporcionando
            economia e flexibilidade.
            </p>
            </div>
    </div>

   

    <footer>
        <p>&copy; 2024 Projeto de TCC. Todos os direitos reservados.</p>
    </footer>


    
</body>


</html>