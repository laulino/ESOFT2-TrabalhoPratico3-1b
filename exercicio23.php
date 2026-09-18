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
Descritivo: Escreva um programa que leia o valor da base e da altura de um triângulo e calcule e
exiba a sua área (Fórmula: Area = (Base * Altura) / 2).
*******************************************************************************/



$base_triangulo = (float) readline('Digite o tamanho da base do triangulo:');
$altura_triangulo = (float) readline('Digite a altura do triangulo:');

$area =  ($base_triangulo * $altura_triangulo) / 2;

print('A área do triangulo é ' . $area);

//Resumindo: Lê a base e a altura de um triângulo, calcula a área com (base * altura) / 2 e exibe o resultado.
?>
