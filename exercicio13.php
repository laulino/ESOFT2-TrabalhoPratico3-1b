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
Descritivo: Escreva um programa que leia dois números inteiros e exiba a média aritmética simples
entre eles.
*******************************************************************************/

$num1 = (int) readline("Digite o primeiro número inteiro: ");
$num2 = (int) readline("Digite o segundo número inteiro: ");

$media = ($num1 + $num2) / 2;

echo "A média aritmética entre $num1 e $num2 é: $media\n";

/*
Foram criadas duas variaveis para guardar os dois numeros inteiros, em seguida utilizei
os comandos "readline" para ler os dados do teclado e armazenar nas variaveis, depois foram
feito os calculos para termos a media aritmetica armazenada na variavel $media, por fim 
utilizei o "echo" para mostrar o resultado na tela.
*/
?>