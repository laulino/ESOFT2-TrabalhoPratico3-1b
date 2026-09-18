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
Descritivo: Escreva um programa que leia dois números inteiros, calcule a soma deles e exiba o
resultado precedido pela palavra 'Soma: '.
*******************************************************************************/

echo "Digite o primeiro número inteiro: ";
$numero1 = (int) fgets(STDIN);

echo "Digite o segundo número inteiro: ";
$numero2 = (int) fgets(STDIN);

$soma = $numero1 + $numero2;
echo "Soma: " . $soma . "\n";

/* 
O exercício pede para declararmos duas variáveis inteiras, e realizamos isso nas linhas 25 e 28, usando $numero1 e $numero2, e logo na linha 30 realizamos a soma das duas variáveis e armazenamos o resultado na variável $soma, e na linha 31 exibimos o resultado da soma, precedido pela palavra 'Soma: '.'., como 
solicitado no enunciado.
*/
?>