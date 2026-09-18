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
Descritivo: Escreva um programa que leia um número real e exiba a terça parte deste número.
*******************************************************************************/

$numero = (float) readline("Digite um número real: ");

/* Calcula a terça parte */
$terca_parte = $numero / 3;

/* Exibe o resultado formatado com 2 casas decimais */
echo "A terça parte de " . number_format($numero, 2, ',', '.') . ' é ' . number_format($terca_parte, 2, ',', '.');

//Resumindo: Lê um número real digitado pelo usuário, divide por 3 e exibe a terça parte desse número.
?>
