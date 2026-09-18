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
Descritivo: 47: Escreva um programa que leia dois nomes e os exiba na tela em ordem alfabética.
*******************************************************************************/

$nome1 = readline("Digite o primeiro nome: ");
$nome2 = readline("Digite o segundo nome: ");

if (strcasecmp($nome1, $nome2) <= 0) {
    echo "Ordem alfabética: $nome1, $nome2\n";
} else {
    echo "Ordem alfabética: $nome2, $nome1\n";
}

/******************************************************************************

Resumindo: o programa pede dois nomes com o readline, compara os dois
com o strcasecmp e mostra os nomes na tela em ordem alfabética.

*******************************************************************************/
?>
