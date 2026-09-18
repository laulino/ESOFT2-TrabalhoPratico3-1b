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
Descritivo:53: Segundo uma tabela médica, o peso ideal de uma pessoa está relacionado com a altura e o sexo.
Escreva um programa que leia a altura e o sexo ('M' ou 'F') de uma pessoa,
e calcule e exiba o seu peso ideal utilizando as seguintes fórmulas:
- Para homens: (72.7 * H) – 58 
- Para mulheres: (62.1 * H) – 44.7
*******************************************************************************/

$altura = (float) readline("Digite a altura em metros (ex: 1.75): ");

$sexo = strtoupper(trim(readline("Digite o sexo (M para Masculino / F para Feminino): ")));

$peso_ideal = 0;

if ($sexo === 'M') {
    $peso_ideal = (72.7 * $altura) - 58;
    echo "\nSexo: Masculino\n";
} elseif ($sexo === 'F') {
    $peso_ideal = (62.1 * $altura) - 44.7;
    echo "\nSexo: Feminino\n";
} else {
    echo "\n[ERRO] Sexo inválido! Digite apenas M ou F.\n";
    exit; 
}

echo "Seu peso ideal é: " . number_format($peso_ideal, 2) . " kg\n";

/*
O programa pede a altura e o sexo da pessoa.
Depois calcula o peso ideal usando a fórmula correspondente para homens ou mulheres.
Se o sexo digitado for diferente de M ou F, ele mostra uma mensagem de erro e encerra o programa.
*/

?>