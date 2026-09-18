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
Descritivo: Escreva um programa que leia um número inteiro entre 1 e 12 e exiba o nome do mês
correspondente por extenso.
*******************************************************************************/

$mes = (int) readline("Digite um número entre 1 e 12: ");

switch ($mes) {
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Número inválido. Por favor, digite um número entre 1 e 12.";
}

/*
Para resolver o enunciado do exercício 55, utilizei a estrutura condicional switch para mapear os números inteiros de 1 a 12 para os nomes dos meses correspondentes. 
O programa lê um número inteiro fornecido pelo usuário e, com base nesse valor, exibe o nome do mês correspondente. Caso o número esteja fora do intervalo de 1 a 12, 
uma mensagem de erro é exibida. A função echo é utilizada para mostrar o resultado na tela. Já o uso do case é o valor que cada variável pode assumir, e o break é 
utilizado para encerrar cada caso após a execução do código correspondente. E por fim, o default é utilizado para tratar casos em que o valor fornecido não corresponde
a nenhum dos casos definidos.
*/
?>