<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Doador</title>
</head>
<body>
    <h1>Cadastrar Doador</h1>
    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br>
        CPF: <input type="text" name="cpf" required><br>
        Tipo Sanguíneo: <input type="text" name="tipo_sanguineo" required><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
    <a href="listar.php">Ver lista de doadores</a>

    <?php
    if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $tipo = $_POST['tipo_sanguineo'];

        $sql = "INSERT INTO doadores (nome, cpf, tipo_sanguineo) VALUES ('$nome', '$cpf', '$tipo')";
        if ($conn->query($sql) === TRUE) {
            echo "Doador cadastrado com sucesso!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    ?>
</body>
</html>