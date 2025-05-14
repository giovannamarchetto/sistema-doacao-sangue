<?php include("conexao.php");

if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
    $sql = "DELETE FROM doadores WHERE cpf = '$cpf'";
    if ($conn->query($sql) === TRUE) {
        header("Location: listar.php");
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>
