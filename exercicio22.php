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
Descritivo: Escreva um programa que leia o valor do saldo de uma aplicação bancária e exiba o novo
saldo reajustado com um acréscimo de 2%.
*******************************************************************************/

echo "Digite o valor do saldo da aplicação bancária: ";
$saldo = (float) trim(fgets(STDIN));

$novoSaldo = $saldo + ($saldo * 0.02);

echo "Novo saldo: " . $novoSaldo;

/*
Fiz a leitura do saldo da aplicação bancária realizada pelo usuário, que é em float, como ilustrado na linha 25, usei a função "trim" para remover espaços em branco e a função "fgets" para ler a entrada do usuário, junto com "stdin" para ler a entrada do  usuário no terminal. Em seguida, calculei o novo saldo com o acréscimo proposto no enúnciado, que é de 2%, e exibi o resultado na tela, concatenando a string 'Novo saldo: ' com o valor do novo saldo calculado, que é do tipo double.
*/
?>