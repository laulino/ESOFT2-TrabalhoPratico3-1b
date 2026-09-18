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
Escreva um programa que leia um número inteiro de 3 casas decimais
(100 a 999) e informe se o algarismo da casa das centenas é par ou ímpar.
******************************************************************************/

echo "Digite um número inteiro entre 100 e 999: ";
$numero = (int) trim(fgets(STDIN));

if ($numero < 100 || $numero > 999) {
    echo "Erro: digite um número entre 100 e 999." . PHP_EOL;
} else {
    $centena = intdiv($numero, 100);

    echo "Algarismo da casa das centenas: $centena" . PHP_EOL;

    if ($centena % 2 == 0) {
        echo "O algarismo da centena é PAR." . PHP_EOL;
    } else {
        echo "O algarismo da centena é ÍMPAR." . PHP_EOL;
    }
}

/*
O programa verifica primeiro se o número possui três algarismos.
Depois utiliza divisão inteira por 100 para obter o algarismo da centena.
Por fim, utiliza o resto da divisão por 2 para verificar se este
algarismo é par ou ímpar.
*/
?>
