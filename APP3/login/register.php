<?php
session_start();
require '../controller/clientecontroller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeCli = $_POST['nomeCli'] ?? '';
    $cpfCli = $_POST['cpfCli'] ?? '';
    $enderecoCli = $_POST['enderecoCli'] ?? '';
    $telefoneCli = $_POST['telefoneCli'] ?? '';
    $emailCli = $_POST['emailCli'] ?? '';
    $senhaCli = $_POST['senhaCli'] ?? '';
    $senhaConfirm = $_POST['senhaConfirm'] ?? '';

    if ($senhaCli !== $senhaConfirm) {
        $error = 'As senhas não coincidem.';
    } else {
        try {
            clientecontroller::cadastrarCliente($nomeCli, $cpfCli, $enderecoCli, $telefoneCli, $emailCli, password_hash($senhaCli, PASSWORD_BCRYPT));
            $success = 'Usuário registrado com sucesso. Você pode fazer login agora.';
        } catch (Exception $e) {
            $error = 'Erro ao registrar o usuário: ' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Novo Usuário</title>
</head>
<body>
    <h2>Registro de Novo Usuário</h2>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if (isset($success)): ?>
        <p style="color:green;"><?php echo $success; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Nome Completo:</label>
        <input type="text" name="nomeCli" required>
        <br>
        <label>CPF:</label>
        <input type="text" name="cpfCli" required>
        <br>
        <label>Endereço:</label>
        <input type="text" name="enderecoCli" required>
        <br>
        <label>Telefone:</label>
        <input type="text" name="telefoneCli" required>
        <br>
        <label>Email:</label>
        <input type="email" name="emailCli" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senhaCli" required>
        <br>
        <label>Confirmar Senha:</label>
        <input type="password" name="senhaConfirm" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <br>
    <a href="login.php">Já tem uma conta? Faça login</a>
</body>
</html>
