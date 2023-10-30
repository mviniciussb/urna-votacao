<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Virtual</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>

<body>
    <main id="menuPrincipal">
        <h1>Eleições Estudantis 2023</h1>
        <?php 
        if(isset($_SESSION['msg'])) 
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>

        <ul>
            <li><a href="paginas-secundarias/cad-chapa.html">Cadastrar chapa</a></li>
            <li><a href="paginas-secundarias/consultarChapas.php">Consultar chapas</a></li>
            <li><a href="paginas-secundarias/votar.html">Votar</a></li>
            <li><a href="paginas-secundarias/relatorio.php">Relatório da votação</a></li>
        </ul>
    </main>
</body>

</html>