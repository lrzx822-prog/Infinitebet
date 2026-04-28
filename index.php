<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfiniteBet - Jujutsu Kaisen Betting</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body class="auth-page">
    <div class="stars"></div>
    
    <div class="auth-container">
        <div class="auth-card">
            <div class="logo">
                <h1>♾️ InfiniteBet</h1>
                <p>Jujutsu Kaisen Betting Platform</p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="auth-form active">
                <h2>Login</h2>
                <div class="form-group">
                    <input type="text" id="loginUsername" placeholder="Usuário" required>
                </div>
                <div class="form-group">
                    <input type="password" id="loginPassword" placeholder="Senha" required>
                </div>
                <button type="submit" class="btn-primary">Entrar</button>
                <p class="form-toggle">Não tem conta? <a href="#" onclick="toggleForm(event)">Cadastre-se</a></p>
            </form>

            <!-- Register Form -->
            <form id="registerForm" class="auth-form">
                <h2>Cadastro</h2>
                <div class="form-group">
                    <input type="text" id="registerUsername" placeholder="Usuário" required>
                </div>
                <div class="form-group">
                    <input type="password" id="registerPassword" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <input type="password" id="registerPasswordConfirm" placeholder="Confirmar Senha" required>
                </div>
                <button type="submit" class="btn-primary">Cadastrar</button>
                <p class="form-toggle">Já tem conta? <a href="#" onclick="toggleForm(event)">Faça login</a></p>
            </form>

            <div id="message" class="message"></div>
        </div>
    </div>

    <script src="js/auth.js"></script>
</body>
</html>