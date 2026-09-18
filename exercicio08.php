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
Descritivo: Escreva um programa que leia um número inteiro e exiba na tela o seu antecessor e o seu 
sucessor.
*******************************************************************************/

$valor = (int)readline("Digite seu número: ");

$antecessor = $valor-1;
$sucessor = $valor+1;

echo("Seu antecessor é: $antecessor\n");
echo("Seu sucessor é: $sucessor\n");


/* O sistema le o número digitado e em seguida soma um para o o sucessor e 
subtrai um para o antecessor e no fim mostra o resultado.
*/
?>
