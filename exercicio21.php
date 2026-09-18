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
Descritivo: 21: Escreva um programa que leia quatro números inteiros e calcule a média ponderada
deles, considerando que os pesos associados a cada número são, respectivamente, 1, 2, 3 e 4.
*******************************************************************************/

$numero1 = (int) readline("Digite o primeiro número: ");
$numero2 = (int) readline("Digite o segundo número: ");
$numero3 = (int) readline("Digite o terceiro número: ");
$numero4 = (int) readline("Digite o quarto número: ");

$media = ($numero1 * 1 + $numero2 * 2 + $numero3 * 3 + $numero4 * 4) / (1 + 2 + 3 + 4);
echo "A média ponderada é: " . number_format($media, 2, ',', '.') . "\n";

/******************************************************************************

Resumindo: o programa pede quatro números inteiros com readline,
multiplica cada um pelo seu peso (1, 2, 3 e 4), soma tudo, divide pela
soma dos pesos (10) e mostra a média ponderada.

*******************************************************************************/
?>
