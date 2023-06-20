<?php
session_start();

session_unset();

session_destroy();
?>

<script>
  alert("Usuário deslogado");
  window.location.href = "index.php";
</script>
