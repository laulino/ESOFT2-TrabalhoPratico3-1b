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
Descritivo: 14: Escreva um programa que leia o nome de um aluno e suas duas notas em avaliações
(AVs), calcule a média aritmética simples e exiba o nome do aluno seguido de sua média
final.
*******************************************************************************/

$nome = readline("Digite o nome do aluno: ");
$nota_av1 = (float) readline("Digite a nota da AV1: ");
$nota_av2 = (float) readline("Digite a nota da AV2: ");

$media = ($nota_av1 + $nota_av2) / 2;
echo "Aluno: $nome - Média final: " . number_format($media, 2, ',', '.') . "\n";

/******************************************************************************

Resumindo: o programa pede o nome do aluno e as duas notas com readline, 
calcula a média e mostra o nome com a média final.

*******************************************************************************/
?>