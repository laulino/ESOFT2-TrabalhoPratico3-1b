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
Escreva um programa que leia três números e os exiba na tela em ordem
crescente e, posteriormente, em ordem decrescente.
******************************************************************************/

echo "Digite o primeiro número: ";
$numero1 = (float) str_replace(",", ".", trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = (float) str_replace(",", ".", trim(fgets(STDIN)));

echo "Digite o terceiro número: ";
$numero3 = (float) str_replace(",", ".", trim(fgets(STDIN)));

if ($numero1 > $numero2) {
    $auxiliar = $numero1;
    $numero1 = $numero2;
    $numero2 = $auxiliar;
}

if ($numero1 > $numero3) {
    $auxiliar = $numero1;
    $numero1 = $numero3;
    $numero3 = $auxiliar;
}

if ($numero2 > $numero3) {
    $auxiliar = $numero2;
    $numero2 = $numero3;
    $numero3 = $auxiliar;
}

echo PHP_EOL;

echo "Ordem crescente: ";
echo "$numero1, $numero2, $numero3" . PHP_EOL;

echo "Ordem decrescente: ";
echo "$numero3, $numero2, $numero1" . PHP_EOL;

/*
O programa recebe três números e realiza comparações entre eles.
Sempre que um valor estiver fora da ordem correta, os valores são
trocados utilizando uma variável auxiliar.

Ao final das comparações, numero1 será o menor valor, numero2 será
o valor intermediário e numero3 será o maior.
*/
?>
