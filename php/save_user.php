<?php
include '../db.php';  // Certifique-se de que o caminho esteja correto

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Criptografa a senha
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

    // Query para inserir dados no banco de dados
    $sql = "INSERT INTO usuarios_Carlos_Vinicius_IW (nome, data_nascimento, email, telefone, cep, rua, numero, bairro, cidade, estado, assunto, mensagem, senha, cpf, rg) 
            VALUES ('$nome', '$data_nascimento', '$email', '$telefone', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$assunto', '$mensagem', '$senha', '$cpf', '$rg')";

    // Executar a query e verificar se houve sucesso
    if (mysqli_query($conn, $sql)) {
        header("Location: usuarios.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
