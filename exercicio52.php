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
Descritivo: Escreva um programa que leia um valor em Reais e a cotação atual do dólar, converta o valor para dólares e exiba o resultado formatado.
*******************************************************************************/

echo "Digite o valor em Reais: ";
$valor_reais = (float) readline();

echo "Digite a cotação atual do dólar: ";
$cotacao = (float) readline();

$valor_dolar = $valor_reais / $cotacao;
echo "Valor em dólares: US$ " . number_format($valor_dolar, 2, ',', '.');

/******************************************************************************
Foram criadas variáveis para armazenar o valor em Reais e a cotação atual do dólar informados pelo usuário, na sequência a conversão do valor para dólares por meio da divisão do valor em Reais pela cotação. Por fim, o echo para exibir o resultado formatado.
*******************************************************************************/
?>