<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compra 4</title>
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
    <h1>Lista de Compras 4</h1>
    <hr>
    <button type="button" class="button">Comprar Novamente</button>
    <br>
<?php
include "conexao.php";

$consulta = $pdo->prepare("SELECT * from lista_compra");
$consulta->execute();
$linha = $consulta->fetchAll(PDO::FETCH_OBJ);

foreach($linha as $listar){
    echo "<br>";
    echo $listar->lista_compra_04;
}
?>
</body>
</html>