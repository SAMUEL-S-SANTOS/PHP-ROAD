<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa Alunos</title>
    <style>
        /* Seu CSS funciona aqui! */
    </style>
</head>
<body>
    <!-- Criando tabela e cabeçalho de dados: -->
    <table border="1" style="width:50%">
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>
        <!-- Preenchendo a tabela com os dados do banco: -->
        <?php
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($strcon, $sql);

        while ($registro = mysqli_fetch_array($resultado)) {
            $nome = $registro['nome'];
            $endereco = $registro['endereco'];
            $cidade = $registro['cidade'];
            echo "<tr>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $endereco . "</td>";
            echo "<td>" . $cidade . "</td>";
            echo "</tr>";
        }

        mysqli_close($strcon); // Fecha a conexão com o banco de dados
        echo "</table>";
        ?>
    </table>

    <form name="exclui" action="exclui.php" method="post">
        <p>Nome do Aluno a ser Excluído:
        <input type="text" name="nome" /></p>
        <input type="submit" name="botao" value="Enviar">
</body>
</html>