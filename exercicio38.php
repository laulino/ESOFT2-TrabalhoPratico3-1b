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
Descritivo: 38: Escreva um programa que determine o grau de obesidade de uma pessoa a partir de seu
peso (kg) e altura (m), calculando o IMC (Massa = Peso / Altura²) e classificando de acordo
com a tabela:
- IMC < 26: Normal
- IMC >= 26 e < 30: Obeso
- IMC >= 30: Obeso Mórbido
*******************************************************************************/

$peso = (float) readline("Digite o peso (kg): ");
$altura = (float) readline("Digite a altura (m): ");

$imc = $peso / ($altura * $altura);

if ($imc < 26) {
    $classificacao = "Normal";
} elseif ($imc < 30) {
    $classificacao = "Obeso";
} else {
    $classificacao = "Obeso Mórbido";
}

echo "IMC: " . number_format($imc, 2, ',', '.') . " - Classificação: $classificacao\n";

/******************************************************************************

Resumindo: o programa pede o peso e a altura com o readline, calcula o IMC
dividindo o peso pela altura ao quadrado e mostra a classificação conforme a tabela.

*******************************************************************************/
?>
