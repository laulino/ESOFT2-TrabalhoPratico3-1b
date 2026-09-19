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
Descritivo: Escreva um programa que leia uma data no formato ddmmaa e exiba separadamente o dia, o mês e o ano.
*******************************************************************************/

echo "Digite uma data: ";
$data = readline();

$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia = " . $dia . "\n";
echo "Mês = " . $mes . "\n";
echo "Ano = " . $ano;

/******************************************************************************
Foi criada uma variável para armazenar a data digitada pelo usuário no formato ddmmaa. Em seguida, foi utilizado o substr para separar a string em três partes correspondentes ao dia, mês e ano. Assim, o programa exibe cada parte da data separadamente.
*******************************************************************************/
?>