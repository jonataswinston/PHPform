<?php

    #dados de conexão
        $servidor = '35.198.0.84'; #ip GCP MySQL
        $usuario = 'applet'; #login banco
        $senha = 'qwe123'; #Senha banco
        $banco = 'Winston_hobby'; #banco em si

    #metodo de conexão sql
        $link = mysqli_connect($servidor, $usuario, $senha, $banco)
        or die('Não foi possivel conectar: '.mysqli_error($link));

        if (isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "adicionar"){
            $sql = "INSERT INTO LIVROS (LIVRO, AUTOR, EDITORA) VALUES (";
            $sql .="'".$_POST['FormNomeLivro']."', ";
            $sql .="'".$_POST['FormNomeAutor']."', ";
            $sql .="'".$_POST['FormNomeEditora']."' ";
            $sql .=")";
        }

        $result = mysqli_query($link, $sql);

        if (!$result){
            die('Erro: '.mysqli_error($link));
        } else {
            echo 'A operação foi realizada com sucesso.';
        }
?>
        <br><A href="inserir.php">Clique aqui para inserir um novo registro.</A>
        <br><A href="lista.php">Clique aqui para visualizar os registros.</A>