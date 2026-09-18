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
Descritivo: 15: Escreva um programa que leia o nome e o sobrenome de uma pessoa e exiba-os na seguinte forma formatada: 'sobrenome, nome' (exemplo: 'Flores, José').
*******************************************************************************/

$nome = readline ("Digite seu nome: ");
$sobrenome = readline ("Digite seu sobrenome: ");

echo "'" . $sobrenome . ", " . $nome . "'";

/******************************************************************************
Foram criadas duas variáveis: uma para guardar o nome da pessoa, e outra para  o sobrenome.
Em seguida, foi utilizado o "echo" para exibir o nome e sobrenome de forma formato como o enunciado está pedindo.
*******************************************************************************/
?>