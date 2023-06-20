<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysqli = new mysqli('localhost', 'root', '', 'cantida_bd');
try {
  $conn = new PDO("mysql:host=$servername;dbname=cantida_bd", $username, $password);
  // Msg de sucesso ou erro
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Conexão falhou!: <br>" . $e->getMessage();
}
?>