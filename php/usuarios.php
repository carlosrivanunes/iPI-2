<?php
include '../db.php';

// Consulta para buscar todos os usuários cadastrados
$sql = "SELECT * FROM usuarios_Carlos_Vinicius_IW";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Usuários Cadastrados</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>CPF</th>
                <th>RG</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // Exibir cada usuário em uma linha da tabela
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['data_nascimento'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telefone'] . "</td>";
                    echo "<td>" . $row['rua'] . ", " . $row['numero'] . " - " . $row['bairro'] . ", " . $row['cidade'] . " - " . $row['estado'] . " (" . $row['cep'] . ")</td>";
                    echo "<td>" . $row['assunto'] . "</td>";
                    echo "<td>" . $row['mensagem'] . "</td>";
                    echo "<td>" . $row['cpf'] . "</td>";
                    echo "<td>" . $row['rg'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>Nenhum usuário cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
