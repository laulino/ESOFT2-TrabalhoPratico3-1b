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
Descritivo: 07: Escreva um programa que calcule e exiba a média aritmética entre os números 8, 9 e 7.
*******************************************************************************/

$num1 = 8;
$num2 = 9;
$num3 = 7;
$media = ($num1 + $num2 + $num3) / 3;

echo "A média entre " . $num1 . ", " . $num2 . ", " . $num3 . " é: " . $media;

/****************************************************************************** 
Foram criadas quatro variáveis: três delas para guardar cada número e uma para o cálculo da média aritmética. 
Na média foi utilizada a lógica de precedência dos operadores. Primeiro é resolvido o que está entre os parenteses, em seguida, a divisão.
Depois, foi utilizado o "echo" para exibir o resultado, utilizando também concatenação para juntar os textos e os valores das variáveis.
*******************************************************************************/
?>