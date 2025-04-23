<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bicicleta</title>
</head>
<body>
<?php
$operacao = $_REQUEST["op"] ?? "Incluir";

if ($operacao == "Alterar") {
    include("../controller/bicicletacontroller.php");
    $res = bicicletacontroller::resgataPorID($_REQUEST["idBike"]);
    $row = $res->fetch(PDO::FETCH_OBJ);
    $modeloBike = $row->modeloBike;
    $marcaBike = $row->marcaBike;
    $quadroBike = $row->quadroBike;
    $corBike = $row->corBike;
    $valorBike = $row->valorBike;
    $idBike = $row->idBike;
} else {
    $modeloBike = "";
    $marcaBike = "";
    $quadroBike = "";
    $corBike = "";
    $valorBike = "";
    $idBike = "";
}
?>

<form method="post" action="../controller/processabicicleta.php">
    <input type="hidden" name="op" value="<?= $operacao ?>">
    <input type="hidden" name="idBike" value="<?= $idBike ?>">
    
    <label>Modelo:</label>
    <input type="text" name="modeloBike" value="<?= $modeloBike ?>" required><br>
    
    <label>Marca:</label>
    <input type="text" name="marcaBike" value="<?= $marcaBike ?>" required><br>
    
    <label>Quadro:</label>
    <input type="text" name="quadroBike" value="<?= $quadroBike ?>" required><br>
    
    <label>Cor:</label>
    <input type="text" name="corBike" value="<?= $corBike ?>" required><br>
    
    <label>Valor:</label>
    <input type="number" step="0.01" name="valorBike" value="<?= $valorBike ?>" required><br>
    
    <input type="submit" value="<?= $operacao ?>">
</form>
</body>
</html>
