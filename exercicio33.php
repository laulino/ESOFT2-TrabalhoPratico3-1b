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
Descritivo: Escreva um programa que leia dois números reais e exiba o maior deles.
*******************************************************************************/
$valor = (float)readline("Digite o número: ");
$valor2 = (float)readline("Digite o número: ");

if($valor>$valor2){
    $mensagem="O número $valor é o maior entre eles.";
}else{
    $mensagem="O número $valor2 é o maior entre eles.";
}

echo"$mensagem";

/*
O programa lê os valores digitados e compara para saber qual é o maior.
*/

?>
