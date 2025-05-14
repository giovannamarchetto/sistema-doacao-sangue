<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Doadores</title>
</head>
<body>
    <h1>Doadores Cadastrados</h1>
    <a href="cadastrar.php">Cadastrar novo doador</a><br><br>
    <table border="1">
        <tr><th>Nome</th><th>CPF</th><th>Tipo Sanguíneo</th><th>Ações</th></tr>
        <?php
        $sql = "SELECT * FROM doadores";
        $resultado = $conn->query($sql);

        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$linha['nome']}</td>
                    <td>{$linha['cpf']}</td>
                    <td>{$linha['tipo_sanguineo']}</td>
                    <td>
                        <a href='editar.php?cpf={$linha['cpf']}'>Editar</a> | 
                        <a href='excluir.php?cpf={$linha['cpf']}'>Excluir</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
