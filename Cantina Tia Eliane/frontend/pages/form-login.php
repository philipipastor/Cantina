<?php
include('../conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    // Consulta o banco de dados para verificar se o email e a senha são válidos
    $sql = "SELECT nome FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);
    
    if ($result->rowCount() == 1) {
        // Login bem-sucedido, cria uma sessão e redireciona para a página desejada
        echo '<script>alert("Login realizado com sucesso!");</script>';
        session_start();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["nome_usuario"] = $row["nome"];
        
        // Exibe um alerta ao usuário
        
        header("Location: index.php");
        exit();
    } else {
        // Login inválido, exibe uma mensagem de erro
        echo '<script>alert("Email ou senha inválidos.");</script>';
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
        ></script>
        <title>oii</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"
                        ><img
                            src="../assets/logo-cantina.png"
                            width="200"
                            height="140"
                    /></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav me-auto mb-2 mb-lg ms-auto">
                            <li class="nav-item me-5">
                                <a
                                    class="nav-link active"
                                    aria-current="page"
                                    href="./index.php"
                                    >Cardápio</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre nós</a>
                            </li>
                        </ul>
                        <div class="me-5">
                            <a
                                class="btn btn-danger me-5"
                                href="./form-cadastro.html"
                                role="button"
                                >Cadastre-se
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <form name="cantida_bd" action="" method="post">
            <div
                class="form-group mb-5 d-flex align-items-center justify-content-around vh-50"
            >
                <div class="col-md-4">
                    <label for="iemail" class="form-label mt-3">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="iemail"
                        name="email"
                        placeholder="Digite seu email"
                    />
                    <label for="isenha" class="form-label mt-3">Senha</label>
                    <input
                        type="password"
                        id="isenha"
                        name="senha"
                        class="form-control"
                        aria-labelledby="passwordHelpBlock"
                        placeholder="Digite sua senha"
                        required
                    />
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger mt-3">
                            Login
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <p>
                            Ainda não é cadastrado?
                            <a href="./form-cadastro.html">Clique aqui.</a>
                        </p>
                    </div>
                </div>
                <div>
                    <h1>Cantina Tia Eliane</h1>
                    <p>Faça seu login para aproveitar nossas vantagens</p>
                </div>
            </div>
        </form>
    </body>
</html>
