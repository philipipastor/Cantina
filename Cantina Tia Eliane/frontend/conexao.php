<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=cantida_bd", $username, $password);
  // Msg de sucesso ou erro
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão efetuada com sucesso!  <br><br><br>";
} catch(PDOException $e) {
  echo "Conexão falhou!: <br>" . $e->getMessage();
}
?>