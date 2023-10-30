<?php 
        $servidor = "localhost";
        $usuario = "root";
        $senha ="";
        $bdName = "eleicoes";

        $conn = new mysqli($servidor, $usuario, $senha, $bdName);
        //   if ($conn->connect_errno) {
        //       echo "<p>Falha ao conectar-se ao banco de dados</p>";
        //   }
        //   else
        //       echo "<p>Conectado com sucesso ao banco de dados.</p>";
     ?>