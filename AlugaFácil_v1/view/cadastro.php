<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
    <section class="form-section">

        <h1>Cadastro</h1>


        <form action="" method="post">

            <div class="form-group">
                <label for="tipoUs">Criar conta de:</label>
                <div class="radio-group">

                    <label>
                        <input type="radio" name="tipoUs" value="locador"> Locador
                    </label>

                    <label id="locatario">
                        <input type="radio" name="tipoUs" value="locatario"> Locatário
                    </label>
                </div>
            </div>

        </form>

        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="form-group">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date" id="dataNasc" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf"  placeholder="Digite seu CPF">
            </div>

            <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj"  placeholder="Digite seu CNPJ">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" placeholder="Digite seu Endereço" requied>
            </div>

            <div class="form-group">
                <label for="numTele">Número de Telefone:</label>
                <input type="text" id="numTele" placeholder="Digite o Número" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Digite o Email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" placeholder="Digite a Senha" required>
            </div>

            <button type="submit" class="submit-button">Enviar</button>
        </form>
    </section>

    <div class="back-link">
        <a href="../index.php">Voltar</a>
    </div>
    </div>
    <?php include_once '../partes/footer.php' ?>
</body>

</html>