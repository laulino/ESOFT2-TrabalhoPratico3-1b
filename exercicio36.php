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
Descritivo: Escreva um programa que leia o código do consumidor, o preço e a quantidade de kWh consumida e exiba o total a pagar, considerando a taxa mínima de R$ 11,20.
*******************************************************************************/

echo "Digite o código do consumidor: ";
$codigo = readline();
echo "Digite o preço do kWh: ";
$preco_kwh = (float) readline();
echo "Digite a quantidade de kWh consumida: ";
$quantidade = (float) readline();

$total = $preco_kwh * $quantidade;
    if ($total < 11.20) {
    $total = 11.20;
}
echo "Código do consumidor = " . $codigo . "\n";
echo "Total a pagar = R$ " . number_format($total, 2, ',', '.');

/******************************************************************************
Foram criadas variáveis para armazenar o código do consumidor, o preço do kWh e a quantidade de kWh consumida. Em seguida, foi realizado o cálculo do total a pagar, multiplicando o preço do kWh pela quantidade consumida.
Foi utilizada uma estrutura if para verificar se o valor calculado é menor que a taxa mínima de R$ 11,20 e, nesse caso, definir o valor mínimo. Por fim, foi utilizado o echo para exibir o código do consumidor e o total a pagar.
*******************************************************************************/
?>