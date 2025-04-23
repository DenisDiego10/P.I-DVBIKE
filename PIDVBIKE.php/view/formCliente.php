<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cliente</title>
</head>
<body>
<?php
$operacao = $_REQUEST["op"];
if ($operacao == "Alterar") {
    include("../controller/clientecontroller.php");
    $res = clientecontroller::resgataPorID($_REQUEST["idCli"]);
    $qtd = $res->rowCount();
    $row = $res->fetch(PDO::FETCH_OBJ);
    $nomeCli = $row->nomeCli;
    $matriculaCli = $row->matriculaCli;
    $cpfCli = $row->cpfCli;
    $enderecoCli = $row->enderecoCli;
    $telefoneCli = $row->telefoneCli;
    $idCli = $row->idCli;
    $emailCli = $row->emailCli;
    $operacao = "Alterar";
}
else {
    $nomeCli = "";
    $matriculaCli = "";
    $cpfCli = "";
    $enderecoCli = "";
    $telefoneCli = "";
    $idCli = "";
    $emailCli = "";
    $operacao = "Incluir";
}

print "<form method='post' action='../controller/processacliente.php'>";
print "    <label for='nomeCli'>Nome:</label>";
print "    <input type='text' name='nomeCli' value=".$nomeCli."><br>";
print "    <label for='matriculaCli'>Matrícula:</label>";
print "    <input type='text' name='matriculaCli' value=".$matriculaCli."><br>";
print "    <label for='cpfCli'>CPF:</label>";
print "    <input type='text' name='cpfCli' value=".$cpfCli."><br>";
print "    <label for='enderecoCli'>Endereço:</label>";
print "    <input type='text' name='enderecoCli' value=".$enderecoCli."><br>";
print "    <label for='telefoneCli'>Telefone:</label>";
print "    <input type='text' name='telefoneCli' value=".$telefoneCli."><br>";
print "    <label for='emailCli'>E-mail:</label>";
print "    <input type='text' name='emailCli' value=".$emailCli."><br>";
print "    <input type='hidden' name='idCli' value=".$idCli."><br>";
print "    <input type='hidden' name='op' value=".$operacao."><br>";
print "    <input type='submit' value='".$operacao."'>";
print " </form>";
?>
</body>
</html>
