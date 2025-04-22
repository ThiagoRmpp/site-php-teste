<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$linha = "$nome - $email - $mensagem" . PHP_EOL;

// Caminho absoluto (se quiser salvar fora da pasta do site, mais seguro)
$arquivo = 'contatos.txt';

if (file_put_contents($arquivo, $linha, FILE_APPEND | LOCK_EX)) {
    header('Location: index.php?sucesso=1');
    exit;
} else {
    // Evite mostrar erro antes do header
    file_put_contents('php://stderr', "Erro ao salvar\n");
    header('Location: index.php?erro=1');
    exit;
}
?>