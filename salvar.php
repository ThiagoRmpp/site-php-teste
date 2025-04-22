<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);

    $linha = "$nome | $email | $telefone" . PHP_EOL;
    file_put_contents("contatos.txt", $linha, FILE_APPEND);

    header("Location: index.php");
    exit;
} else {
    echo "Acesso inválido.";
}