<?php include("conexao.php");

if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
    $sql = "SELECT * FROM doadores WHERE cpf = '$cpf'";
    $res = $conn->query($sql);
    $doador = $res->fetch_assoc();
}

if (isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo_sanguineo'];
    $sql = "UPDATE doadores SET nome = '$nome', tipo_sanguineo = '$tipo' WHERE cpf = '$cpf'";
    if ($conn->query($sql) === TRUE) {
        header("Location: listar.php");
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Doador</title>
</head>
<body>
    <h1>Editar Doador</h1>
    <form method="post">
        Nome: <input type="text" name="nome" value="<?= $doador['nome'] ?>" required><br>
        Tipo Sanguíneo: <input type="text" name="tipo_sanguineo" value="<?= $doador['tipo_sanguineo'] ?>" required><br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>
