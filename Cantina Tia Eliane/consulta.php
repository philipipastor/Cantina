<?php
    include 'conexao.php';
    $sql = 'SELECT id, nome, celular, nasc, endereco, numero, matricula, turma, ano, sexo, loginn, senha FROM formulario ORDER BY nome';
    echo "<table border='1'>";
    echo "<caption>Consulta aos dados das pessoas cadastras</caption> <br>";
    echo "<thead><tr><th>Nome</th> <th>Celular</th> <th>Nascimento</th> <th>Endereço</th> <th>Número</th> <th>Matrícula</th> <th>Turma</th> <th>Ano</th> <th>Sexo</th> <th>Login</th> <th>Senha</th <br> <th colspan='2'>Operações</th></tr></thead><tbody>";

    foreach ($conn->query($sql) as $row){
        echo "<tr><td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['celular'] . "</td>";
        echo "<td>" . date('d/m/Y',strtotime($row['nasc'])) . "</td>";
        echo "<td>" . $row['endereco'] . "</td>";
        echo "<td>" . $row['numero'] . "</td>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['turma'] . "</td>";
        echo "<td>" . $row['ano'] . "</td>";
        echo "<td>" . $row['sexo'] . "</td>";
        echo "<td>" . $row['loginn'] . "</td>";
        echo "<td>" . $row['senha'] . "</td>";

        echo "<td><a href=editar.php?id=" . $row['id'] . ">Editar</a></td>";
        echo "<td><a href=excluir.php?id=" . $row['id'] . ">Excluir</a></td></tr>";
    }
    echo "</tbody></table>" ;
?>