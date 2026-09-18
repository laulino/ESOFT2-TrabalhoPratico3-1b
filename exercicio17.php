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
Escreva um programa que leia dois números inteiros (dividendo e divisor)
e exiba Dividendo, Divisor, Quociente inteiro e Resto da divisão.
******************************************************************************/

echo "Digite o dividendo: ";
$dividendo = (int) trim(fgets(STDIN));

echo "Digite o divisor: ";
$divisor = (int) trim(fgets(STDIN));

if ($divisor == 0) {
    echo "Erro: não é possível realizar divisão por zero." . PHP_EOL;
} else {
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

    echo PHP_EOL;
    echo "Dividendo: $dividendo" . PHP_EOL;
    echo "Divisor: $divisor" . PHP_EOL;
    echo "Quociente: $quociente" . PHP_EOL;
    echo "Resto: $resto" . PHP_EOL;
}

/*
O programa recebe o dividendo e o divisor. Primeiro verifica se o divisor
é diferente de zero. Depois utiliza intdiv() para encontrar o quociente
inteiro e o operador % para encontrar o resto da divisão.
*/
?>
