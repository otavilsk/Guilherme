<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Login</title>
</head>

<body>
    <main>
        <section class="form-section">
            <h1>Login</h1>
            <p class="questionUser">Novo no site? <a href="cadastro.php">Cadastrar-se</a></p>
            <form action="login_process.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="login-email">Email:</label>
                    <input type="email" id="login-email" name="email" placeholder="Digite o Email" required>
                </div>
                <div class="form-group">
                    <label for="login-senha">Senha:</label>
                    <input type="password" id="login-senha" name="senha" placeholder="Digite a Senha" required>
                </div>
                <button type="submit" class="submit-button">Entrar</button>
            </form>
        </section>
        <div class="back-link">
            <a href="../index.php">Voltar</a>
        </div>
    </main>

    <!-- Inclua o footer PHP -->
    <?php include '../partes/footer.php'; ?>
</body>

</html>