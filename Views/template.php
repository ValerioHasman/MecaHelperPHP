<!DOCTYPE html>
<html lang="pt-br">

<head>
    <base href="http://localhost/MECA/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.js">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.js">
    </script>
    <link rel="stylesheet" href="formatar/estilo.css">
    <link rel="shortcut icon" href="midias/ICONE.ico" type="image/x-icon">
    <title><?= $nomeView ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark bg-opacity-75">
        <div class="container-fluid">
            <a class="navbar-brand" href="home/index"><img src="midias/svg.svg" alt="Logo" width="152"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="home/sobre">Sobre a Aplicação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="home/contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn nav-link active" data-bs-toggle="modal"
                            data-bs-target="#logarModal">
                            Logar
                        </button>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn nav-link active" data-bs-toggle="modal"
                            data-bs-target="#cadastrarModal">
                            Cadastrar
                        </button>
                    </li>
            </div>
            </ul>
        </div>
        </div>
    </nav>



    <!-- Modal -->
    <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastrarModalLabel">Cadastrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal logar -->
    <div class="modal fade" id="logarModal" tabindex="-1" aria-labelledby="logarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logarModalLabel">Logar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Logar</button>
                </div>
            </div>
        </div>
    </div>
    <?php

    $this->carregarViewNoTemplate($nomeView, $dadosModel);

    ?>
</body>

</html>
