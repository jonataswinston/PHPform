<?php

    #dados de conexão
        $servidor = '35.198.0.84'; #ip GCP MySQL
        $usuario = 'applet'; #login banco
        $senha = 'qwe123'; #Senha banco
        $banco = 'testes'; #banco em si

    #metodo de conexão sql
        $link = mysqli_connect($servidor, $usuario, $senha, $banco)
        or die('Não foi possivel conectar: '.mysqli_error($link));

        if (isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "adicionar"){
            $sql = ""
        }