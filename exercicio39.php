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
Descritivo: 39: Uma empresa deseja aplicar um reajuste salarial aos seus funcionários. Escreva um programa que leia o nome do funcionário e seu salário atual e, de acordo com a tabela abaixo, calcule e exiba o novo salário:
- Salário atual de R$ 0.00 a R$ 1000.00: 20% de reajuste
- Salário atual de R$ 1000.01 a R$ 5000.00: 10% de reajuste
- Salário atual acima de R$ 5000.00: 0% (sem reajuste)
*******************************************************************************/

$nome = readline ("Digite o nome do funcionário: ");
$salAtual = (Float) readline ("Digite o salário atual: ");

if ($salAtual <= 1000.00) {
    $reajuste = $salAtual * 0.20;
} elseif ($salAtual <= 5000.00) {
    $reajuste = $salAtual * 0.10;
} else {
    $reajuste = 0;
}
$salNovo = $salAtual + $reajuste;

echo "Funcionário: " . $nome . "\n";
echo "Novo salário: R$ " . $salNovo;

/******************************************************************************
Primeiramente, foram criadas duas variáveis para armazenar o nome do funcionário e seu salário atual, já transformando o valor digitado em um número real.
Depois, foram utilizadas estruturas condicionais para verificar em qual faixa salarial do funcionário e calcular o reajuste.
Por fim, foi calculado o novo salário somando o salário atual com o valor do reajuste, e o resultado foi exibido na tela.
*******************************************************************************/
?>