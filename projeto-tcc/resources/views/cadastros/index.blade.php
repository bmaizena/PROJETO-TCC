<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
   
    <style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Montserrat", sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;

}

header {
    color: white;
    padding: 0;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
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





.hero {
    padding: 50px 20px;
    color: white;
  
}

#home {
    background: url('/bus-img-1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center ;
 
}

.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    text-shadow: black 1px 0 20px;
    
    
}

.hero p {
    font-size: 1.2rem;
    text-shadow: black 1px 0 20px;
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
    text-align: center;
}

.content p {
    font-size: 1.1rem;
    line-height: 1.6;
    
}


footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    margin-top: 20px;

}
#menu {
    list-style: none;
    display: flex;
    gap: 20px;
}

#hamburger {
    display: none;
    font-size: 30px;
    cursor: pointer;
}






@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
    }
    
    main{
        margin: auto;
    }

    header{
        text-align: center;
    }


    .hero h1 {
        font-size: 2rem;
    }

    .content {
        margin-bottom: 20px;
    }

    .content h2 {
        font-size: 1.5rem;
    }

    
    #menu {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
        padding: 20px;
    }

    #menu.active {
        display: flex;
    }
    #hamburger {
        display: block;
    }
    


}
    </style>
</head>
<body>

    <header class="pt-0 bg-gradient-to-r from-blue-800 to-blue-700 hover:from-blue-700 hover:to-blue-800 relative">
        
        <nav class="bg-blue-950 border-b-2 h-16">
            <ul class="pt-4" id="menu">
                <li id="logo" class="absolute top-2 left-2"><img src="/logo-bus-cortado.png" alt="onibus" width="65px"></li>
                
                <li><a href="#home" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Início</a></li>

                <li><a href="#historia" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">História do Tema</a></li>

                <li><a href="#ideia" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Como Surgiu a Ideia</a></li>

                <li><a href="#menuFunc" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Funcionalidades</a></li>

                <li><a href="/cadastros/cadastro"  class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Cadastro</a></li>

                <li id="logo-text" class="absolute right-4 top-4 text-2xl ">BUS.IO</li>
            </ul>
            <div id="hamburger">&#9776;</div>
        </nav>
        
        <section id="home" class="hero"> 
            <div>
                <h1 class="text-9xl text-center font-semibold text-neutral-100">BUS.IO</h1>
                <br>
                <p class=" text-neutral-100 font-semibold">Explore nossa jornada e saiba mais sobre o desenvolvimento deste projeto.</p>
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
            <p>A criação de um aplicativo voltado para os usuários de transporte público revelou-se indispensável. Através de pesquisas, identificamos que a maioria dos passageiros enfrenta ou já enfrentou dificuldades ao utilizar o transporte coletivo, como chegar atrasado ou não saber o horário exato em que o ônibus passará no ponto</p>
        </section>

        <section  id="menuFunc" class="content">
        <h2>Funcionalidades</h2>
        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 rounded-lg shadow-xl text-center">
            <h1><b>Localização de Pontos de Ônibus</b></h1>
            <p class="text-slate-950">Os usuários podem facilmente encontrar os
                pontos de ônibus mais próximos de sua localização atual usando o aplicativo.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2  rounded-lg shadow-xl text-center">
            <h1><b>Consulta de Horários</b></h1>
            <p>Os horários de partida e chegada dos ônibus estão disponíveis
            para consulta, permitindo que os usuários planejem suas viagens com antecedência.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 text-center rounded-lg shadow-xl">
            <h1><b>Valores de Passagem</b></h1>
            <p>Os preços das passagens de ônibus são exibidos no aplicativo,
            ajudando os usuários a gerenciarem seus gastos com transporte.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 text-center rounded-lg shadow-xl">
            <h1><b>Compra de Passagem Online</b></h1>
            <p>O aplicativo oferece a conveniência de comprar
            passagens de ônibus diretamente pelo smartphone, eliminando a necessidade de
            esperar em filas.
        </p>
        </div>
        
        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 text-center rounded-lg shadow-xl">
            <h1><b>Passe Mensal</b></h1>
            <p> Os usuários têm a opção de carregar um passe mensal, válido para
            uso em qualquer ônibus de qualquer cidade atendida pelo serviço, proporcionando
            economia e flexibilidade.
            </p>
        </div>
    </section>
    </main>



    <footer>
        <p>&copy; 2024 Projeto de TCC. Todos os direitos reservados.</p>
    </footer>


    

    
</body>


</html>


<script>
        const hamburger = document.getElementById('hamburger');
        const menu = document.getElementById('menu');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('active');
        });

        
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                menu.classList.remove('active');
                menu.style.display = 'flex'; 
            } else {
                menu.style.display = ''; 
            }
        });
    </script>

