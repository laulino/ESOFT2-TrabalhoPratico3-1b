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
Descritivo: Escreva um programa que leia dois números inteiros e exiba o produto entre eles.
*******************************************************************************/

echo "Digite o primeiro número inteiro: ";
$numero1 = (int) readline();

echo "Digite o segundo número inteiro: ";
$numero2 = (int) readline();

$produto = $numero1 * $numero2;
echo "Produto = " . $produto;

/******************************************************************************
Foram criadas duas variáveis para armazenar os números inteiros digitados pelo usuário, usando o readline para realizar a leitura dos valores pelo teclado e o tipo int para tratar os valores como números inteiros. Depois, foi feita a multiplicação entre os dois números e o resultado foi armazenado em uma variável. Por fim, o echo para exibir o produto na tela.
*******************************************************************************/
?>