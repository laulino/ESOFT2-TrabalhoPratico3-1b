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
Descritivo: Escreva um programa para calcular o imposto de renda anual de um contribuinte. O 
programa deve ler: CPF, Nome, Rendimento Anual, Imposto Retido na Fonte, Contribuição 
Previdenciária, Despesas Médicas e Número de Dependentes.
Considere as seguintes regras:- Deduzir R$ 1.080,00 por dependente;
- Total das Deduções = Contribuição Previdenciária + Despesas Médicas + Dedução por dependentes;
- Base de Cálculo = Rendimento Anual - Total das Deduções;
- Imposto Devido = (Base de Cálculo * Alíquota) 
- Parcela a Deduzir (conforme tabela abaixo):
* Base até R$ 10.800,00: Isento (Alíquota 0%)
* Base de R$ 10.800,01 até R$ 21.600,00: Alíquota 15%, Parcela a deduzir R$ 1.620,00
* Base acima de R$ 21.600,00: Alíquota 25%, Parcela a deduzir R$ 3.780,00
- Se a diferença (Imposto Devido - Imposto Retido na Fonte) for positiva, há imposto a 
PAGAR; se for negativa, há imposto a RESTITUIR
*******************************************************************************/
$cpf = (string)readline("Digite seu CPF: ");
$nome = (string) readline("Digite seu nome: ");
$rendimento = (float) readline("Digite seu rendimento anual: ");
$imposto = (float) readline("Digite seu imposto retido: ");
$contribuicao = (float) readline("Digite sua contribuição Previdenciária: ");
$medico = (float) readline("Digite suas despesas médicas: ");
$dependentes = (int) readline("Digite o número de dependentes: ");

$deducao =(1080*$dependentes)+$contribuicao+$medico;
$base = $rendimento-$deducao;

if($base<=10800){
    $aliquota = $base*1;
}elseif($base>10800 && $base<=21600){
    $aliquota = $base*0.15 - 1620;
}else{
    $aliquota = $base*0.25 - 3780;
}

$resultado=$aliquota-$imposto;

if($resultado>0){
    $mensagem=("Você tem R$$resultado a pagar de imposto.");
}else{
    $resultado*=-1;
    $mensagem=("Você tem R$$resultado a receber.");
}
$cpf = str_replace([".","-"],"",$cpf);
$cpf = substr($cpf, 0,3). ".". substr($cpf, 3,3). ".". substr($cpf, 6,3)."-" .substr($cpf, 9,2);

echo("-------------CONTRIBUIENTE-------------\n");
echo("Nome: $nome\n");
echo("CPF: $cpf\n");
echo("$mensagem\n");
echo("---------------------------------------");

/*
O programa le as informações do cliente,
em seguida, faz o calculo para estabelecer qual a base e depois a aliquota,
diminuir a aliquota com o imposto retido e compara se é maior ou menor do 0 para dizer
se existe saldo positivo ou negativo.

a linha 58 e 59 foi apenas um capricho para adicionar
a pontuação correta no echo do cpf.
*/

?>
