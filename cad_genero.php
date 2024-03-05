<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora Ita</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-3 bg-primary">
                <ul>
                    <li>
                        <a href="cad_genero">
                            Cadastro Gênero
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Cadastro Classe
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-9">

                <h1>Cadastro de Gênero</h1>
                <form action="cad_genero.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="genero">Gênero</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-gender-ambiguous"></i>
                                </span>
                                <input type="text" name="genero" id="genero" placeholder="Digite o gênero"
                                    class="form-control" value="<?php $genero; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary" name="enviar">Cadastrar</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>