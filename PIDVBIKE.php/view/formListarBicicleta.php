<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Bicicletas</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>
<h1>Bicicletas Cadastradas</h1>
<a href="formBicicleta.php">Nova Bicicleta</a>

<?php
include("../controller/bicicletacontroller.php");
$res = bicicletacontroller::listarBicicletas();

if ($res->rowCount() > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Quadro</th>
            <th>Cor</th>
            <th>Valor</th>
            <th>Ações</th>
          </tr>";

    while ($row = $res->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>
                <td>{$row->idBike}</td>
                <td>{$row->modeloBike}</td>
                <td>{$row->marcaBike}</td>
                <td>{$row->quadroBike}</td>
                <td>{$row->corBike}</td>
                <td>R$ ".number_format($row->valorBike, 2, ',', '.')."</td>
                <td>
                    <a href='formBicicleta.php?op=Alterar&idBike={$row->idBike}'>Editar</a> | 
                    <a href='../controller/processabicicleta.php?op=Excluir&idBike={$row->idBike}' 
                       onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nenhuma bicicleta cadastrada.</p>";
}
?>
</body>
</html>
