<?php
// include_once "_conn/connect.php";
require_once "_conn/connect.php";
$connect = Connect();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora Ita</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1>Cadastro de Gênero</h1>

    <?php
    if(isset($_POST['enviar'])){
        $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_ADD_SLASHES);
        $cad = "INSERT INTO genero(genero) VALUES (?)";
    
        $prop = $connect->prepare($cad);
        $prop->bindParam(1, $genero);
        $prop->execute();
    }else{
        
        ?>
    <form action="cad_genero.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="genero">Gênero</label>
                <input type="text" name="genero" id="genero" placeholder="Digite o gênero" class="form-control">
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary" name="enviar">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
    <?php     
}
    ?>

</body>

</html>