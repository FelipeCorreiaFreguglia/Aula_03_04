<?php
// Declaração e atribuição de uma variável do tipo float.
$peso = 68.5;

// Mensagem baseada no peso.
if ($peso >= 70.0) {
    $mensagem = "Seu peso está acima do recomendado.";
} elseif ($peso >= 50.0 && $peso < 70.0) {
    $mensagem = "Seu peso está dentro do recomendado.";
} else {
    $mensagem = "Seu peso está abaixo do recomendado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Peso</title>
</head>
<body>
    <h1>Verificação de Peso</h1>
    <p><?php echo $mensagem; ?></p>
    <p>Seu peso: <?php echo $peso; ?> kg</p>
</body>
</html>