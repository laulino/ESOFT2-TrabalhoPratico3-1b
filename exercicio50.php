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
Descritivo: Escreva um programa que leia cinco números e exiba na tela o maior e o menor valor 
digitado.
*******************************************************************************/
$n = (int) readline("Digite o primero número: ");
$n2= (int) readline("Digite o segundo número: ");
$n3= (int) readline("Digite o terceiro número: ");
$n4= (int) readline("Digite o quarto número: ");
$n5= (int) readline("Digite o quinto número: ");

$numero = [$n,$n2,$n3,$n4,$n5];
$maior = max($numero);
$menor = min($numero);

echo("O maior número é o $maior.\n");
echo("O menor número é o $menor.");


/* 
Após os número serem digitados, eles são armazenados em uma array
e em seguida o max e o min selecionam o maior e o menor número.
*/
?>
