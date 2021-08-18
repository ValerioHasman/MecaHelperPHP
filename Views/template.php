<!DOCTYPE html>
<html lang="pt-br">

<head>
    <base href="http://localhost/MECA/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formatar/estilo.css">
    <link rel="shortcut icon" href="midias/LOGO.ico" type="image/x-icon">
    <title>template</title>
</head>

<body>
    <header>
        <nav>
            <a href="#">Início</a>
            <a href="#">Notícias</a>
            <a href="#">Contato</a>
            <a href="#">Sobre</a>
        </nav>
    </header>
    <?php

    $this->carregarViewNoTemplate($nomeView, $dadosModel);

    ?>
</body>

</html>
