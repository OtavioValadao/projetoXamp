<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$recebendo_dados = " INSERT INTO teste VALUES ('$nome', '$email') ";

$query = mysqli_query($conn, $recebendo_dados);

header('location:index.html')

?>