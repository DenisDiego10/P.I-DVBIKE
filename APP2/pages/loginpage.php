<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>DV Bike - Login</title>
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
                    <h2 class="titulo">DV Bike</h2>
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
        <?php
        require '../login/config.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = isset($_POST['nomeCli']) ? $_POST['nomeCli'] : '';
            $senhaCli = isset($_POST['senhaCli']) ? $_POST['senhaCli'] : '';

            $stmt = $pdo->prepare("SELECT * FROM clientes WHERE nomeCli = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch();

            if ($user && password_verify($senhaCli, $user['senhaCli'])) {
                $_SESSION['user_id'] = $user['idCli'];
                $_SESSION['username'] = $user['nomeCli'];
                header('Location: index2.php');
                exit();
            } else {
                $error = 'Nome de usuário ou senha inválidos';
            }
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-light">Login</h2>
     <!--           <?php if (isset($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>-->
                <form method="POST" action="loginpage.php">
                    <div class="form-group">
                        <label for="nomeCli" class="text-light">Nome de usuário:</label>
                        <input type="text" class="form-control" id="username" name="nomeCli" required />
                    </div>
                    <div class="form-group">
                        <label for="senhaCli" class="text-light">Senha:</label>
                        <input type="password" class="form-control" id="senhaCli" name="senhaCli" required />
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
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
