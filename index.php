<?php
$contatos = file_exists("contatos.txt") ? file("contatos.txt") : [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Contatos</h1>
        <a href="cadastrar.php" class="botao">Cadastrar Novo Contato</a>
        <hr>

        <?php if (count($contatos) > 0): ?>
            <ul>
                <?php foreach ($contatos as $contato): ?>
                    <li><?= htmlspecialchars($contato) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum contato cadastrado ainda.</p>
        <?php endif; ?>
    </div>
</body>
</html>