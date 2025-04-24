<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
<?php
    include("../controller/clientecontroller.php");
    $res = clientecontroller::listarClientes();
    $qtd = $res->rowCount();
    if($qtd>0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Senha</th>";
        print "<th>CPF</th>";
        print "<th>Endereço</th>";
        print "<th>Telefone</th>";
        print "<th>Email</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->idCli."</td>";
            print "<td>".$row->nomeCli."</td>";
            print "<td>".$row->senhaCli."</td>";
            print "<td>".$row->cpfCli."</td>";
            print "<td>".$row->enderecoCli."</td>";
            print "<td>".$row->telefoneCli."</td>";
            print "<td>".$row->emailCli."</td>";
            print "<td>
                <button onclick=\"location.href='../view/formCliente.php?op=Alterar&idCli=".$row->idCli."'\">Alterar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                    location.href='../controller/processacliente.php?op=Excluir&idCli=".$row->idCli."';
                } else { false; }\">Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        echo "<p>Nenhum registro encontrado!</p>";
    }
?>
</body>
</html>
