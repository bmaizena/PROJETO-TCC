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
}
    </style>
</head>
<body>

    <header class=" bg-gradient-to-r from-blue-400 to-cyan-400 hover:from-cyan-400 hover:to-blue-400 ">
        <nav>
            <ul>
                <li><a href="#home" class=" hover:text-slate-700 transition duration-150 ease-in-out ">Início</a></li>
                <li><a href="#historia" class=" hover:text-slate-700 transition duration-150 ease-in-out ">História do Tema</a></li>
                <li><a href="#ideia" class=" hover:text-slate-700 transition duration-150 ease-in-out ">Como Surgiu a Ideia</a></li>
                <li><a href="/cadastros/cadastro"  class=" hover:text-slate-700 transition duration-150 ease-in-out ">Cadastro</a></li>
            </ul>
        </nav>
        <section id="home" class="hero">
            <h1>Bem-vindo ao Projeto de TCC</h1>
            <p>Explore nossa jornada e saiba mais sobre o desenvolvimento deste projeto.</p>
        </section>
    </header>

    <main>
        <section id="historia" class="content">
            <h2>História do Tema</h2>
            <p>O tema do projeto de TCC foi desenvolvido a partir de uma profunda pesquisa sobre ...</p>
        </section>

        <section id="ideia" class="content">
            <h2>Como Surgiu a Ideia</h2>
            <p>A ideia do projeto surgiu quando identificamos a necessidade de ...</p>
        </section>

       
    </main>

    <footer>
        <p>&copy; 2024 Projeto de TCC. Todos os direitos reservados.</p>
    </footer>


    
</body>
</html>