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
Descritivo: Escreva um programa que leia um número inteiro de três algarismos (de 100 a 999) e
exiba o algarismo correspondente à casa das dezenas.
*******************************************************************************/

$numero = (int) readline("Digite um número inteiro de 3 algarismos (100 a 999): ");

$dezena = (int) ($numero / 10) % 10;

echo "O algarismo da casa das dezenas é: $dezena\n";

/*
Foram criadas duas variaveis, uma para guardar o numero inteiro de 3 algarismos e outra para 
guardar o algarismo da casa das dezenas, em seguida utilizei os comandos "readline" para ler
os dados do teclado e armazenar nas variaveis, depois foi feito o calculo para termos o algarismo
da casa das dezenas armazenada na variavel $dezena, por fim utilizei o "echo" para mostrar o
resultado no terminal.
*/
?>