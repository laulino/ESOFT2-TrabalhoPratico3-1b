<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2

Componentes: 
26001788-2 - Anna Julia Denzer de Paula
26009422-2 - Eduardo de Freitas Martins da Silva
26010318-2 - Fabio Pinheiro
26006516-2 - Guilherme Vinicius da Silva
26014696-2 - João Felipe Moro
26002013-2 - Juan Gabriel Ribeiro de Carvalho
26008749-2 - Juan Guilherme Mendes de Moraes
26011565-2 - Lauane Gabrielly Putinato Lino
26006299-2 - Pedro Henrique Martins Muniz

Data: 18 de Setembro de 2026
Descritivo: Escreva um programa que leia separadamente o dia, o mês e o ano de uma data e 
informe se ela é uma data válida ou não. Considere a ocorrência de anos bissextos.
*******************************************************************************/
$dia = (int) readline("Digite o dia: ");
$mes= (int) readline("Digite o mês: ");
$ano= (int) readline("Digite o ano: ");

if($mes==1 || $mes==3 || $mes==5|| $mes==7 || $mes==8 || $mes==10 || $mes==12){
    $diadomes = 31;
}elseif($mes==4 || $mes==6 || $mes==9|| $mes==11){
    $diadomes = 30;
}else{
    $diadomes = 28;
}

if($ano%400==0 || $ano%4==0 && $ano % 100 != 0) {
    if($mes==2 && $dia>=1 && $dia<=29){
        echo("Data válida!");
    }elseif($dia>=1 && $dia<=$diadomes && $mes>=1 && $mes<=12){
        echo("Data válida!");
    }else{
        echo("Data inválida!");
    }
}else{
    if($dia>=1 && $dia<=$diadomes && $mes>=1 && $mes<=12){
        echo("Data válida!");
    }else{
        echo("Data inválida!");
    }
}


/* 
O sistema começa estabelecendo os dias que o mês tem, sendo eles 31, 30 e 28, caso 
o ano seja bissexto, ele verifica se é o mês dois para atribuir 29 dias, caso contrario ele continua com 
a variavel do $diadomes e verifica se o mês é valido.
*/
?>
