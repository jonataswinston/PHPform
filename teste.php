<?php
echo ("Ola\n");
do {
    echo("Insira a primeira nota! \n");
    $nota1 = readline();
    echo("Insira a segunda nota! \n");
    $nota2 = readline();
    echo("A media do aluno é: ".GetMediaAluno($nota1,$nota2));
    echo("\ndeseja calcular novamente? 1 = sim | 2 = não ");
    $Choice = readline();
}while(!($Choice==2));

    function GetMediaAluno($nota1,$nota2){
        $MediaFinal = ($nota1 + $nota2)/2;
        return $MediaFinal;
    }
