<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
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

Descritivo:
Escreva um programa que leia dois números reais e os exiba primeiro
em ordem crescente e depois em ordem decrescente.
******************************************************************************/

echo "Digite o primeiro número: ";
$numero1 = (float) str_replace(",", ".", trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = (float) str_replace(",", ".", trim(fgets(STDIN)));

if ($numero1 <= $numero2) {
    $menor = $numero1;
    $maior = $numero2;
} else {
    $menor = $numero2;
    $maior = $numero1;
}

echo PHP_EOL;
echo "Ordem crescente: $menor, $maior" . PHP_EOL;
echo "Ordem decrescente: $maior, $menor" . PHP_EOL;

/*
O programa recebe dois números reais e compara os valores utilizando uma
estrutura condicional. A partir da comparação, determina qual é o menor
e qual é o maior e apresenta os números nas duas ordens solicitadas.
*/
?>
