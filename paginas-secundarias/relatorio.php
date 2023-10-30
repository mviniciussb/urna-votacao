<?php

include("../scripts/conexao.php");

    $sqlConsulta6 = "SELECT * FROM chapas ORDER BY id DESC";

    $result11 = $conn->query($sqlConsulta6);

    $totalVotos = 0;
    while ($userData = mysqli_fetch_assoc($result11)) {
    $totalVotos += $userData['contadorVoto'];
}

    $result11 = $conn->query($sqlConsulta6);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/tabelas.css">
    <title>Relatório</title>
</head>
<body>
    <h1>Relatório da votação estudantil</h1>
    <table id="tabela2">
            <thead>
                <tr>
                    <th scope="col">Nome da chapa</th>
                    <th scope="col">Qtdd de votos</th>
                    <th scope="col">% de total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($userData = mysqli_fetch_assoc($result11)){
                        echo "<tr>";
                        echo "<td>" .$userData['nome'] . "</td>";
                        echo "<td>" .$userData['contadorVoto'] . "</td>";
                        $porcentagem = ($userData['contadorVoto'] / $totalVotos) * 100;
                        echo "<td>" . round($porcentagem, 2) . "%</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
    </table>

    <?php
        echo "<h2>Total de votos: $totalVotos</h2>";
    ?>
    <br>
    <BUTTon class="botoes"><a href="../index.php">Voltar</a></BUTTon>
</body>
</html>