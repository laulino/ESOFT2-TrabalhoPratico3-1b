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
Descritivo: Escreva um programa que calcule e exiba o comprimento de uma circunferência com
base em seu raio fornecido pelo usuário. Defina PI como uma constante com valor 3.1415
(Fórmula: C = 2 * PI * Raio).
*******************************************************************************/

define('PI', 3.1415);

$raio = (float) readline("Digite o raio: ");
echo "Comprimento: " . (2 * PI * $raio) . "\n";

/*
utilizei a variavel $raio para guardar o valor do raio, em seguida utilizei o comando "readline"
para ler os dados do teclado e armazenar na variavel, depois foi feito o calculo para termos
o comprimento da circunferencia, no fim utilizei o "echo" para mostrar o resultado na tela.
*/
?>