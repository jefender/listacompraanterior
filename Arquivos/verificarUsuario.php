<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Usuário</title>
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

$user = $_POST["txtuser"];
$senha = $_POST["txtsenha"];

$sqlComando = "SELECT usuario, senha FROM t_user_list_buy where usuario='$user' and senha='$senha'";

$stmt = $pdo->query($sqlComando);
if ($stmt->rowCount() > 0)
{
    echo "Login Correto<br>Acesso Liberado<br><br>";
    echo "Usuario: $user<br>";
    echo "Senha: $senha"; 
}
else{
    echo "Login Incorreto<br>Acesso Negado<br><br>";
    echo "Usuario: $user<br>";
    echo "Senha: $senha"; 
}
?>
</body>
</html>