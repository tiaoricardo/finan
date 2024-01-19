<?php

$descricao = $_POST["descricao"];
$valor = $_POST["valor"];

$filename = 'dados.txt';

if (file_exists($filename)) {
    $dados = file($filename);
} else {
    $dados = [];
}

$dados[] = "$descricao|$valor";

$arquivo = fopen($filename, 'w+');

fwrite($arquivo, implode("\n", $dados));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2;url=http://finan/" />

    <title>Document</title>
</head>
<body>

<?php echo "A despesa $descricao no valor de R$ $valor foi registrada com sucesso!"; ?>
    
</body>
</html>