<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="../js/script.js"></script>
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
        <title>Document</title>
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
                                    routerLink="/home"
                                    >Cardápio</a
                                >
                            </li>
                            <li class="nav-item dropdown me-5">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    Produtos
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#combos"
                                            >Combos</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#bebidas"
                                            >Bebidas</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre nós</a>
                            </li>
                        </ul>
                        <div class="me-5">
                            <?php
                                if (isset($_SESSION["nome_usuario"])) {
                                echo '<a class="btn btn-danger me-5" href="logout.php" role="button">Encerrar sessão</a>';
                                }
                                else {
                                    echo '<a class="btn btn-danger me-5" href="./form-login.php" role="button">Login</a>';
                                    echo '<a class="btn btn-danger me-5" href="./form-cadastro.html" role="button">Cadastre-se</a>';
                                }
                            ?>  
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="form-group mb-5 d-flex justify-content-around">
                    <div class="col-md-7 me-5">
                        <h3 class="mt-3" id="combos">Combos</h3>
                        <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/salgadoguaracamp.jpg"
                                        class="card-img-top"
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Salgado + guaracamp
                                        </h5>
                                        <p class="card-text">R$<span>5,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/pizzaguara.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Pizza + guaracamp
                                        </h5>
                                        <p class="card-text">R$<span>5,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/cachorroguara.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Cahorro quente + guaracamp
                                        </h5>
                                        <p class="card-text">R$<span>5,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/hambguaara.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Hamburguer + guaracamp
                                        </h5>
                                        <p class="card-text">R$<span>5,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h3 id="bebidas">Bebidas</h3>
                        <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/agua.jpg"
                                        class="card-img-top"
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Água</h5>
                                        <p class="card-text">R$<span>2,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/refrig250.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Refrigerante (250ml)
                                        </h5>
                                        <p class="card-text">R$<span>2,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/suco caixinha.webp"
                                        class="card-img-top"
                                        alt="..."
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Suco</h5>
                                        <p class="card-text">R$<span>2,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img
                                        src="../assets/nescau.webp"
                                        class="card-img-top"
                                        alt="..."
                                        height="90px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">Nescau</h5>
                                        <p class="card-text">R$<span>2,00</span></p>
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Adicionar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sticky-top">
                            <div class="row">
                                <div class="col">
                                    <h2>Carrinho de: </h2>
                                    <?php
                                        if (isset($_SESSION["nome_usuario"])) {
                                        $nomeUsuario = $_SESSION["nome_usuario"];
                                        echo '<p class="h5"><span class="text-primary">' . $nomeUsuario . '</span>!</p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p>Valor TOTAL:</p>
                                </div>
                                <div class="col text-right p">
                                    <p>R$<span>0,00</span></p>
                                </div>
                            </div>

                            <button
                                type="button"
                                class="btn btn-success finalizar-button"
                                id="finalizar-button"                               
                            >
                                Finalizar compra
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
