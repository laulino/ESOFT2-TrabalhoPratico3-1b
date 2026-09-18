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
Escreva um programa que leia o tipo de um veículo ('A', 'B', 'C', 'D'
ou 'E') e a distância em Km. Com base no consumo de cada veículo,
calcule o total estimado de litros de combustível para o trajeto.
******************************************************************************/

echo "Digite o tipo do veículo (A, B, C, D ou E): ";
$tipo = strtoupper(trim(fgets(STDIN)));

echo "Digite a distância que será percorrida em Km: ";
$distancia = (float) str_replace(",", ".", trim(fgets(STDIN)));

if ($distancia < 0) {
    echo "Erro: a distância não pode ser negativa." . PHP_EOL;
    exit;
}

switch ($tipo) {
    case "A":
        $consumo = 13.5;
        break;

    case "B":
        $consumo = 12.0;
        break;

    case "C":
        $consumo = 10.5;
        break;

    case "D":
        $consumo = 9.0;
        break;

    case "E":
        $consumo = 7.5;
        break;

    default:
        echo "Erro: tipo de veículo inválido." . PHP_EOL;
        exit;
}

$litros = $distancia / $consumo;

echo PHP_EOL;
echo "Tipo do veículo: $tipo" . PHP_EOL;
echo "Consumo: $consumo Km/l" . PHP_EOL;
echo "Distância: $distancia Km" . PHP_EOL;
echo "Combustível estimado: "
    . number_format($litros, 2, ",", ".")
    . " litros"
    . PHP_EOL;

/*
O programa recebe o tipo do veículo e a distância desejada.
Uma estrutura switch determina o consumo em Km/l correspondente
ao tipo informado.

Depois, a quantidade de combustível necessária é calculada dividindo
a distância pelo consumo do veículo.
*/

?>
