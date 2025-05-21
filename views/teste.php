<?php include 'header.php'; ?>
<a href="index.php" class="back-arrow">&#8592;</a>
<div class="form-container">
    <form method="POST" action="">
        <label>Email</label>
        <input type="email" name="email" placeholder="Digite seu e-mail" required>

        <label>Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>

        <button type="submit">Entrar</button>

        <a href="#">Esqueceu a senha?</a>
    </form>
</div>
<?php include 'footer.php'; ?>