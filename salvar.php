<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$linha = "$nome - $email - $mensagem" . PHP_EOL;

// Usa o caminho para a pasta de armazenamento
$arquivo = __DIR__ . '/storage/contatos.txt';

if (file_put_contents($arquivo, $linha, FILE_APPEND | LOCK_EX)) {
    header('Location: index.php?sucesso=1');
    exit;
} else {
    error_log("Erro ao salvar o contato.");
    header('Location: index.php?erro=1');
    exit;
}
?>