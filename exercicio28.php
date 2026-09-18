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
Escreva um programa que leia um número real e, se ele for maior do que 20,
exiba a metade deste número.
******************************************************************************/

echo "Digite um número real: ";
$numero = (float) str_replace(",", ".", trim(fgets(STDIN)));

if ($numero > 20) {
    $metade = $numero / 2;

    echo "Metade do número: $metade" . PHP_EOL;
}

/*
O programa recebe um número real e verifica, através de uma estrutura
condicional, se o valor é maior que 20. Caso seja, calcula e exibe
a metade do número.
*/
?>
