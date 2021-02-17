<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuário</title>
    <style>
        body {
            background-color: gray;
            color: rgb(236, 227, 227);
        }
        .button {
                background-color: green; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
    </style>
</head>
<body>
    <h1>ALERTA</h1>
    <hr>
    <br>
<?php
include "conexao.php";

$nome = $_POST["txtNewName"];
$email = $_POST["txtNewEmail"];
$senha = $_POST["txtNewSenha"];

$stmt = $pdo->prepare("INSERT INTO t_user_list_buy (usuario, email, senha) values(?, ?, ?)");

$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$senha);

$stmt->execute();

echo "Login Criado com Sucesso<br><br>";
echo "Usuario: $nome<br>";
echo "Senha: $senha"; 
?>
</body>
</html>