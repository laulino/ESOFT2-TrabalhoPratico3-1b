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
Descritivo:54: Escreva um programa que leia um número inteiro 
entre 1 e 7 e mostre o dia da semana correspondente 
(exemplo: 1 -> 'Domingo', 4 -> 'Quarta-feira', etc.).
*******************************************************************************/

$numero = (int) readline("Digite um número entre 1 e 7: ");

switch ($numero) {
    case 1:
        echo "Domingo\n";
        break;
    case 2:
        echo "Segunda-feira\n";
        break;
    case 3:
        echo "Terça-feira\n";
        break;
    case 4:
        echo "Quarta-feira\n";
        break;
    case 5:
        echo "Quinta-feira\n";
        break;
    case 6:
        echo "Sexta-feira\n";
        break;
    case 7:
        echo "Sábado\n";
        break;
    default:
        echo "Número inválido! Por favor, escolha um valor entre 1 e 7.\n";
        break;
}

?>