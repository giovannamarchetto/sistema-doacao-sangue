<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "doacoes";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
