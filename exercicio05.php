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
Escreva um programa que obtenha o nome do usuário via teclado e exiba
a mensagem de boas-vindas: "Olá [nome digitado]!".
******************************************************************************/

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Olá $nome!" . PHP_EOL;


/*
O programa solicita o nome do usuário através do teclado utilizando a entrada
padrão do terminal. Em seguida, exibe uma mensagem de boas-vindas contendo
o nome informado.
*/
?>
