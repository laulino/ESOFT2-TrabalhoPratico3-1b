<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes: 

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
Descritivo: Escreva um programa que leia uma data no formato ddmmaa (ex: 250826) e exiba a
mesma data reorganizada no formato mmddaa.
*******************************************************************************/

$dataOriginal = trim(readline("Digite uma data no formato ddmmaa (ex: 250826): "));

$dia = substr($dataOriginal, 0, 2);
$mes = substr($dataOriginal, 2, 2);
$ano = substr($dataOriginal, 4, 2);
$dataReorganizada = $mes . $dia . $ano;

echo "Data informada (ddmmaa): " . $dataOriginal . "\n";
echo "Data formatada (mmddaa): " . $dataReorganizada . "\n";

/*
Criamos as variaveis $dataOriginal, $dia, $mes, $ano e $dataReorganizada, em seguida utilizei
a função "substr" para separar a data informada em dia, mês e ano, depois foram inseridos os 
valores das variaveis $mes, $dia e $ano na variavel $dataReorganizada, no fim utilizei o "echo" para
mostrar o resultado na tela.
*/
?>