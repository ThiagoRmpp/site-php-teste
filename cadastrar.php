<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Contato</h1>

        <form action="salvar.php" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>E-mail:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Telefone:</label><br>
            <input type="text" name="telefone" required><br><br>

            <input type="submit" value="Salvar Contato" class="botao">
        </form>

        <p><a href="index.php">Voltar à Lista</a></p>
    </div>
</body>
</html>