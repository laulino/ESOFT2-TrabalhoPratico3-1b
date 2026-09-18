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
Descritivo:Escreva um programa que leia um número inteiro e exiba se ele é PAR ou ÍMPAR.
*******************************************************************************/

$numero = (int) readline('Digite um número inteiro:');

$resto = $numero % 2;

if ($resto == 0) {
    print('O número ' . $numero . ' é PAR');
} else {
    print('O número ' . $numero . ' é ÍMPAR');
}

/*Resumindo: Lê um número inteiro e usa o operador % para calcular o resto da divisão por 2.
Se o resto for 0, exibe que o número é PAR. Caso contrário, exibe que é ÍMPAR.*/
?>
