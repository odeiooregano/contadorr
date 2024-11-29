<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        include 'contador.php';
        $contador = incrementarContador();
        ?>
        <h1>Contador de Acessos</h1>
        <p>Esta página foi acessada <strong><?php echo $contador; ?></strong> vezes.</p>
    </div>
</body>
</html>