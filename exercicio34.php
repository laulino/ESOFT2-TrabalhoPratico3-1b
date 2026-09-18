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
Descritivo: Escreva um programa que leia dois números reais e exiba o maior de forma clara
(abordagem focada em lógica estruturada de decisão composta).
*******************************************************************************/

echo "Digite o primeiro número real: ";
$numero1 = (float) trim(fgets(STDIN));

echo "Digite o segundo número real: ";
$numero2 = (float) trim(fgets(STDIN));

if ($numero1 > $numero2) {
    echo "O maior número é: " . $numero1;
}elseif ($numero2 > $numero1) {
    echo "O maior número é: " . $numero2;
} else {
    echo "Os números são iguais: " . $numero1;
}

/*
O exercício pede para declarar duas variáveis em float, e realizei isso nas linhas 25 e 28, e em seguida, utilizei uma estrutura de decisão composta (if, elseif, else) para comparar os valores das duas variáveis e exibir o maior número de forma clara, ou informar que os números são iguais, caso seja o caso. 
*/
?>