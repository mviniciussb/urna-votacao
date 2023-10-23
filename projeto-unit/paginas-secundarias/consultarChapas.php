<?php

include("../scripts/conexao.php");

$sqlConsulta = "SELECT * FROM chapas ORDER BY id DESC";
    $result1 = $conn->query($sqlConsulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/tabelas.css">
    <title>Consulta de chapas</title>
</head>
<body>
    <h1>Chapas cadastradas</h1>
    <table id="tabelas">
            <thead>
                <tr>
                    <th scope="col">Nome da chapa</th>
                    <th scope="col">Código da chapa</th>
                    <th scope="col">Nome do lider</th>
                    <th scope="col">Matricula do lider</th>
                    <th scope="col">Nome do vice-lider</th>
                    <th scope="col">Matricula do vice-lider</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($userData = mysqli_fetch_assoc($result1)){
                        echo "<tr>";
                        echo "<td>" .$userData['nome'] . "</td>";
                        echo "<td>" .$userData['codigo'] . "</td>";
                        echo "<td>" .$userData['nome_lider'] . "</td>";
                        echo "<td>" .$userData['codigo_lider'] . "</td>";
                        echo "<td>" .$userData['nome_vice'] . "</td>";
                        echo "<td>" .$userData['codigo_vice'] . "</td>";
                    }
                ?>
            </tbody>
    </table>
    <BUTTon class="botoes"><a href="../index.php">Voltar</a></BUTTon>
</body>
</html>