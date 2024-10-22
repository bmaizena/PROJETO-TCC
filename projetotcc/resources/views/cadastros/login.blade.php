<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="email"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: auto ;
            border: 1px solid #ccc;
            border-radius: 4px;
            
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="/cadastros/recRestrito" method="GET">
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="senha" placeholder="Senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <div class="forgot-password">
            <a href="/cadastros/cadastro">Voltar</a>
        </div>
    </div>
</body>
</html>
