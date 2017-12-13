<?php

$servidor = '35.198.0.84'; #ip GCP MySQL
$usuario = 'applet'; #login banco
$senha = 'qwe123'; #Senha banco
$banco = 'Winston_hobby'; #banco em si

#metodo de conexão sql
$link = mysqli_connect($servidor, $usuario, $senha, $banco)
or die('Não foi possivel conectar: '.mysqli_error($link));

$sql = "SELECT * FROM LIVROS";
?>

<html>
    <table border="1">
        <tr>
            <td>Cod.</td>
            <td>Livro</td>
            <td>Autor</td>
            <td>Editora</td>
        </tr>
        <?php
        $result = mysqli_query($link, $sql);
        while ($tbl = mysqli_fetch_array($result)){
            $codigo = $tbl["ID"];
            $livro = $tbl["LIVRO"];
            $autor = $tbl["AUTOR"];
            $editora = $tbl["EDITORA"];
            echo "<tr>";
            echo "<td>$codigo ";
            echo "<A href=\"inserir.php?acao=editar&buscacodigo=$codigo\">";
            echo "(Editar)</A>";
            echo "<A href=\"gerencia-registro.php?acao=excluir&buscacodigo=$codigo\">";
            echo "(Excluir)</A>";
            echo "</td>";
            echo "<td>$livro</td>";
            echo "<td>$autor</td>";
            echo "<td>$editora</td>";
            echo "</tr>";
        }
        ?>
    </table>
<BR><A href="inserir.php">Clique aqui para inserir um novo livro.</A>
</html>
