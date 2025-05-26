<style>
    body {
        background-color: #000;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        position: relative;
    }

    .back-arrow {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 28px;
        color: #FFD700;
        text-decoration: none;
    }

    .form-container {
        background-color: #fff;
        color: #000;
        border-radius: 20px;
        padding: 30px 20px;
        width: 90%;
        max-width: 350px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
        text-align: left;
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #000;
    }

    .form-container label {
        display: block;
        font-size: 14px;
        margin-bottom: 6px;
    }

    .form-container input[type="email"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        font-size: 16px;
        margin-bottom: 15px;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 14px;
        background-color: #2b2b2b;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .form-container a {
        display: block;
        text-align: left;
        font-size: 14px;
        margin-top: 15px;
        color: #007bff;
        text-decoration: none;
    }

    .alert {
        background-color: #ffdddd;
        color: #a94442;
        padding: 10px;
        margin-top: 15px;
        border: 1px solid #ebccd1;
        border-radius: 8px;
    }
</style>

<a href="#" class="back-arrow">&#8592;</a>

<div class="form-container">
    <h1>Bem-vindo</h1>

    <form method="post" action="../login.php">
        <label>Digite o seu email</label>
        <input type="email" name="usuario" placeholder="Digite seu email" required>

        <label>Digite a senha</label>
        <input type="password" name="senha" placeholder="Senha" required>

        <input type="submit" value="Entrar">
    </form>

    <a href="#">Esqueceu a senha?</a>

    <?php if (isset($_GET['erro'])){ ?>
        <div class="alert" role="alert">
            Usuário e/ou senha inválido(s).
        </div>
    <?php } ?>
</div>

