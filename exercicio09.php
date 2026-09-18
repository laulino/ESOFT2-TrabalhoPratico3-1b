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
Descritivo: Escreva um programa que leia um nome, um endereço e um telefone via teclado e
imprima-os na tela organizados em linhas separadas.
*******************************************************************************/

$nome = readline("Digite o nome: ");
$endereco = readline("Digite o endereço: ");
$telefone = readline("Digite o telefone: ");

echo "\n    Dados Informados    \n";
echo "Nome: $nome\n";
echo "Endereço: $endereco\n";
echo "Telefone: $telefone\n";

/*
Foram criadas três variaveis uma para guardar o nome outra para o endereço e outra para o 
telefone, em seguida foram utilizados os comandos "readline" para ler os dados do teclado 
e armazenar nas variaveis, por fim utilizei o "echo" para exibir os dados na tela 
organizados em linhas separadas.
*/
?>