<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecemos!</title>
</head>

<body>
<?php
            session_start();
            include("conexao.php");
            //Dados da chapa
        
            $nomeChapa = $_POST["nomeChapa"];
            $codigoChapa = $_POST["codChapa"];
        
            //Dados dos lideres
        
            $nomeLider = $_POST["nomeLider"];
            $nomeV_Lider = $_POST["nomeV_Lider"];
        
            $codigoLider = $_POST["codLider"];
            $codigoV_Lider = $_POST["codV_Lider"];
        
            // echo "<p>Nome da chapa: $nomeChapa; </p>";
            // echo "<p>Código da chapa: $codigoChapa</p>";
            // echo "<p>Nome do lider: $nomeLider</p>";
            // echo "<p>Nome do vice-lider: $nomeV_Lider</p>";
            // echo "<p>Código do lider: $codigoLider</p>";
            // echo "<p>Código do vice-lider: $codigoV_Lider</p>  ";
        
            $sql = "INSERT INTO chapas (nome, codigo, nome_lider, codigo_lider, nome_vice, codigo_vice) VALUES ('$nomeChapa', '$codigoChapa', '$nomeLider', '$codigoLider', '$nomeV_Lider', '$codigoV_Lider')";
            $resultadoSql = mysqli_query($conn, $sql);

            if (mysqli_insert_id($conn)) {
                $_SESSION['msg'] = '<p id="sucess">Chapa cadastrada com sucesso.</p>';
                header("Location: ../index.php");
            } else {
                header("Location: ../index.php");
            }
        ?>
</body>

</html>