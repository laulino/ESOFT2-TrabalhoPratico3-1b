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
Descritivo: Escreva um programa que leia um número inteiro e informe se ele é estritamente maior que zero.
*******************************************************************************/

echo "Digite um número inteiro: ";
$numero = (int) readline();

if ($numero > 0) {
    echo "O número é estritamente maior que zero.";
} else {
    echo "O número não é maior que zero.";
}

/******************************************************************************
Foi criada uma variável para armazenar o número inteiro digitado pelo usuário. Foi utilizado o readline para realizar a leitura do valor pelo teclado e uma estrutura if para verificar se o número é estritamente maior que zero. Concluindo com o echo para exibir a mensagem correspondente ao resultado da verificação.
*******************************************************************************/
?>