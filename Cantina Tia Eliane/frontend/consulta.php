<?php
include('conexao.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Tabela de consulta</title>
</head>
<body>
    <div class="container">
        <?php
        // Consulta todos os registros da tabela
        $sql = "SELECT * FROM usuarios";
        $resultado = $conn->query($sql);

        // Verifica se existem registros
        if ($resultado->rowCount() > 0) {
            echo "<table class='table'>";
            echo "<thead class='thead-light'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Senha</th>";
            echo "<th>Ações</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Loop através dos resultados da consulta
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['senha'] . "</td>";
                echo "<td>";
                echo "<a class='btn btn-primary btn-sm me' href='editar.php?id=" . $row['id'] . "'>Editar</a>";
                echo "<a class='btn btn-danger btn-sm ml-2' href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Nenhum registro encontrado.</p>";
        }
        ?>
        <div class="mb-3">
            <a class="btn btn-success mr-2" href="inserirCRUD.php">Adicionar Usuário</a>
            <a class="btn btn-primary" href="./pages/index.html">Voltar ao Início</a>
        </div>
    </div>
</body>
</html>

<?php
$conn = null;
?>

</html>