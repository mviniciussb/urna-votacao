<?php
include("../scripts/conexao.php");

$sqlConsulta5 = "SELECT * FROM chapas ORDER BY id DESC";
$result15 = $conn->query($sqlConsulta5);
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
    <p>Escolha apenas uma chapa para votar. Marque a chapa desejada e clique no botão "votar".</p>
    <form action="../scripts/contabilizaVoto.php" method="post">
        <table class="tabelas">
            <thead>
                <tr>
                    <th scope="col">Nome da chapa</th>
                    <th scope="col">Código da chapa</th>
                    <th scope="col">Nome do lider</th>
                    <th scope="col">Matricula do lider</th>
                    <th scope="col">Nome do vice-lider</th>
                    <th scope="col">Matricula do vice-lider</th>
                    <th scope="col">Votar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($userData1 = mysqli_fetch_assoc($result15)){
                    echo "<tr>";
                    echo "<td>" . $userData1['nome'] . "</td>";
                    echo "<td>" . $userData1['codigo'] . "</td>";
                    echo "<td>" . $userData1['nome_lider'] . "</td>";
                    echo "<td>" . $userData1['codigo_lider'] . "</td>";
                    echo "<td>" . $userData1['nome_vice'] . "</td>";
                    echo "<td>" . $userData1['codigo_vice'] . "</td>";
                    echo '<td><input type="radio" name="chapaVoto" value="' . $userData1['codigo'] . '"></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <button class="botoes" type="submit">Votar</button>
    </form>
</body>
</html>