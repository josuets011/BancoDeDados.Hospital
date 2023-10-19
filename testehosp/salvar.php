<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['CPF'];
$data = $_POST['data'];


$sql = mysqli_query($conexao, "INSERT INTO Paciente(NOME, NUM_CADASTRO, DATA_NASC) VALUES ('$nome', '$cpf', $data)");

// Redireciona para o arquivo index.php
header("Location: indexx.php");
exit();
?>