<?php 
    include("conexao.php");
    $contVoto = $_POST["chapaVoto"];
    
     
     $sqlConsultaSS = "SELECT contadorVoto FROM chapas WHERE codigo = '$contVoto'";
     $resultt = $conn->query($sqlConsultaSS);

     if ($resultt) {
         $row = mysqli_fetch_assoc($resultt);
         $atualContagem = $row['contadorVoto'];

         
         $novaContagem = $atualContagem + 1;

         
         $sqlUpdate = "UPDATE chapas SET contadorVoto = $novaContagem WHERE codigo = '$contVoto'";
         if ($conn->query($sqlUpdate)) {
             echo "Voto registrado com sucesso!";

         } else {
             echo "Erro ao registrar o voto: " . $conn->error;
         }
     }
     echo '<p><a href="../index.php">Voltar para a página inicial</a></p>';
?>