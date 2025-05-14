<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>DV Bikes - Cadastro</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="../estilos/reset.css" rel="stylesheet" />
    <link href="../estilos/estilo.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row align-items-center py-3">
                <div class="col-sm">
                    <div class="logo">
                        <a href="../index.php"><img height="100px" src="../img/Logo D.VBike.png" alt="DV Bike Logo" /></a>
                    </div>
                </div>
                <div class="col-sm">
                    <h2 class="titulo">DV Bikes</h2>
                </div>
                <div class="col-sm text-right">
                    <button class="entrar btn btn-outline-primary mr-2">
                        <a href="loginpage.php" class="text-decoration-none">Entrar</a>
                    </button>
                    <button class="cadastrar btn btn-primary">
                        <a href="cadastro.php" class="text-white text-decoration-none">Cadastrar-se</a>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="container mt-5">
        <h2 class="text-light">Cadastro de Novo Usuário</h2>
        <form method="POST" action="../login/register.php">
            <div class="form-group">
                <label class="text-light" for="nomeCli">Nome Completo:</label>
                <input type="text" class="form-control" id="nomeCli" name="nomeCli" required />
            </div>
            <div class="form-group">
                <label class="text-light" for="cpfCli">CPF:</label>
                <input type="text" class="form-control" id="cpfCli" name="cpfCli" required />
            </div>
            <div class="form-group">
                <label class="text-light" for="enderecoCli">Endereço:</label>
                <input type="text" class="form-control" id="enderecoCli" name="enderecoCli" required />
            </div>
            <div class="form-group">
                <label class="text-light" for="telefoneCli">Telefone:</label>
                <input type="text" class="form-control" id="telefoneCli" name="telefoneCli" required />
            </div>
            <div class="form-group">
                <label class="text-light" for="emailCli">Email:</label>
                <input type="email" class="form-control" id="emailCli" name="emailCli" required />
            </div>
            <div class="form-group">
                <label class="text-light" for="senhaCli">Senha:</label>
                <input type="password" class="form-control" id="senhaCli" name="senhaCli" required />
            </div>
            <div class="form-group">
                <label class="text-light" for="senhaConfirm">Confirmar Senha:</label>
                <input type="password" class="form-control" id="senhaConfirm" name="senhaConfirm" required />
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    </main>

    <footer class="footer mt-5 py-4 bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm">
                    <div class="logo">
                        <a href="../index.php"><img height="100px" src="../img/Logo D.VBike.png" alt="DV Bike Logo" /></a>
                    </div>
                </div>
                <div class="col-sm">
                    <p class="endereco">RUA BENJAMIN CONSTANT 2236</p>
                </div>
                <div class="col-sm">
                    <div class="links d-flex justify-content-around">
                        <img height="50px" src="../img/instagram logo.webp" alt="Instagram" />
                        <img height="50px" src="../img/linkedin icon.png" alt="LinkedIn" />
                        <img height="50px" src="../img/youtube icon.png" alt="YouTube" />
                        <img height="50px" src="../img/x logo.png" alt="X Logo" />
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
