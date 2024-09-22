<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";  // Deixe vazio se não houver senha
$db_database = "ipi_2";
$db_port = 3307;

// Criar a conexão
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_database, $db_port);

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>