<?php 
    include("conexao.php");

    $matriculasAlunos = $_POST["matAluno"];

    $sqlConsultaAluno = "SELECT * FROM alunos";
            $result2 = $conn->query($sqlConsultaAluno);

            $valorExiste = false;

            while ($row = $result2->fetch_assoc()) {
                if ($row['matricula'] == $matriculasAlunos) {
                    $valorExiste = true;
                    break;
        }
    }
                if ($valorExiste) {
                     echo "Permitido apenas um voto por aluno.";
                     header("refresh:1.5;url=../index.php");
                } else {

                $sqlAluno = "INSERT INTO alunos (matricula) VALUES ('$matriculasAlunos')";
                $resultadoSqlAluno = mysqli_query($conn, $sqlAluno);
                header("Location: ../paginas-secundarias/cadastroVotos.php");

        //         echo '<table border="1">';
        //         echo 
        //         '<tr>
        //         <th>Nome da chapa</th>
        //         <th>Codigo da chapa</th>
        //         <th>Nome do lider</th>
        //         <th>Matricula do lider</th>
        //         <th>Nome do vice-lider</th>
        //         <th>Matricula do vice-lider</th>
        //         </tr>';
                
        //         $sqlConsultaAluno2 = "SELECT * FROM chapas ORDER BY id DESC";
        //         $result = $conn->query($sqlConsultaAluno2);

        //         while ($row = $result->fetch_assoc()) {
        //             echo '<tr>';
        //             echo '<td>' . $row['nome'] . '</td>';
        //             echo '<td>' . $row['codigo'] . '</td>';
        //             echo '<td>' . $row['nome_lider'] . '</td>';
        //             echo '<td>' . $row['codigo_lider'] . '</td>';
        //             echo '<td>' . $row['nome_vice'] . '</td>';
        //             echo '<td>' . $row['codigo_vice'] . '</td>';
        //             echo '</tr>';
        //         }

        // echo '</table>';

                    // $sqlConsulta = "SELECT * FROM chapas ORDER BY id DESC";
                    // $result1 = $conn->query($sqlConsulta);
                    // while($userData = mysqli_fetch_assoc($result1)){
                    //     echo "<tr>";
                    //     echo "<td>" .$userData['nome'] . "</td>";
                    //     echo "<td>" .$userData['codigo'] . "</td>";
                    //     echo "<td>" .$userData['nome_lider'] . "</td>";
                    //     echo "<td>" .$userData['codigo_lider'] . "</td>";
                    //     echo "<td>" .$userData['nome_vice'] . "</td>";
                    //     echo "<td>" .$userData['codigo_vice'] . "</td>";
                    // }
                    



                      
                }
?>