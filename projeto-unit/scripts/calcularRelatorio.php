<?php 
    $sqlConsultaRelatorio = "SELECT contadorVoto FROM chapas";
    $resultadoRelatorio = $conn->query($sqlConsultaRelatorio);
    echo "$result";
?>