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
Descritivo:37: Escreva um programa que leia três notas de um aluno,
calcule a média aritmética simples e exiba a média e o conceito correspondente, 
conforme a tabela:- Média >= 8.0: Conceito A- Média >= 5.0 e < 8.0: Conceito B- Média < 5.0: Conceito C
*******************************************************************************/

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 8.0) {
    $conceito = "A";
} elseif ($media >= 5.0) {
    $conceito = "B";
} else {
    $conceito = "C";
}

echo "\nMédia final: " . number_format($media, 1) . "\n";
echo "Conceito correspondente: " . $conceito . "\n";

/*
O programa lê três notas e calcula a média aritmética entre elas e mostra na tela:
Se a média for maior ou igual a 8.0: Ele mostra o conceito A.
Se a média for maior ou igual a 5.0 e menor que 8.0: Ele mostra o conceito B.
Se a média for menor que 5.0: Ele mostra o conceito C.
*/
?>