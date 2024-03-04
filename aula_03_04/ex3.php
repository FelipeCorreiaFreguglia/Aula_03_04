<?php
// Declaração e atribuição de uma variável do tipo inteiro.
$idade = 25;

// Mensagem baseada na idade.
if ($idade >= 18) {
    $mensagem = "Você é maior de idade.";
} else {
    $mensagem = "Você é menor de idade.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
</head>
<body>
    <h1>Verificação de Idade</h1>
    <p><?php echo $mensagem; ?></p>
    <p>Sua idade: <?php echo $idade; ?></p>
</body>
</html>