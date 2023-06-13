<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT id, nome, celular, nasc, endereco, numero, matricula, turma, ano, sexo, loginn, senha FROM formulario WHERE id=$id";

echo "<html><body><h1>Alteração</h1><form action='edita-update.php' method='post'>";

foreach($conn->query($sql) as $row) {

    echo "<input type='hidden' name='id' value='$id'/>";
    echo "<label for='nome'>Nome:</label>";
    echo "<input type='text' id='nome' name='nome' placeholder='Digite seu nome' value='" . $row['nome'] . "'/>";
    echo "<br><br>";

    echo "<label for='celular'>Telefone:</label>";
    echo "<input type='number' name='celular' id='icelular' placeholder='celular' value='" . $row['celular'] . "'/>";
    echo "<br><br>";

    echo "<label for='inasc'>Data de nascimento: </label>";
    echo "<input type='date' name='nasc' id='inasc' value='" . $row['nasc'] . "'/>";
    echo "<br><br>";

    echo "<label for='iendereco'>Endereço:</label>";
    echo "<input type='text' name='endereco' id='iendereco' value='" . $row['endereco'] . "'/>";

    echo "<label for='inumero'>Número:</label>";
    echo "<input type='number' name='numero' id='inumero' value='" . $row['numero'] . "'/>";
    echo "<br><br>";

    echo "<label for='imat'>Matrícula:</label>";
    echo "<input type='number' name='matricula' id='imat' value='" . $row['matricula'] . "'/>";
    echo "<br><br>";

    echo "<label for='iturma'>Turma: </label>";
    echo "<input type='number' name='turma' id='iturma' value='" . $row['turma'] . "'/>";

    echo "<label for='iano'>Ano:</label>";
    echo "<input type='number' name='ano' id='iano' value='" . $row['ano'] . "'/>";
    echo "<br><br>";

    echo "<label for='isexo'>Sexo:</label>";
    echo "<input type='text' required name='sexo' id='isexo' value='" . $row['sexo'] . "'/>";
    echo "<br><br>";

    echo "<label for='ilogin'>Login</label>";
    echo "<input type='text' name='loginn' id='iloginn' value='" . $row['loginn'] . "'/>";

    echo "<label for='isenha'>Senha</label>";
    echo "<input type='password' name='senha' id='isenha' value='" . $row['senha'] . "'/>";
    echo "<br><br>";
}
    echo "<input type='submit' value='Salvar dados'>";
    echo "<br>";
    echo "<a href='consulta.php'>Consultar dados</a>";

echo "</form></body></html>";
?>
