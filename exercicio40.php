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
Descritivo:Escreva um programa para calcular a conta final de um hóspede de um hotel. Devem ser
lidos: nome, tipo do apartamento (A, B, C ou D), quantidade de diárias e valor do consumo
interno do hóspede.
O valor unitário da diária é determinado pela tabela:
- Apartamento A: R$ 150.00 | Apartamento B: R$ 100.00
- Apartamento C: R$ 75.00 | Apartamento D: R$ 50.00
O programa deve calcular:
- Valor total das diárias (dias * valor_diaria);
- Subtotal (diárias + consumo interno);
- Taxa de serviço (10% sobre o subtotal);
- Total geral (subtotal + taxa de serviço).
Exiba a fatura completa e detalhada.
*******************************************************************************/

$nome = (string) readline('Digite seu nome para realizar o fechamento da sua reserva:');
print('As modalidades de apertamentos são A, B, C e D' . "\n");
$tipo_apartamento = (string) readline('Digite qual tipo de apartamento ficou hospedado:'); // Aceita A, B, C ou D
$quantidade_diarias = (int) readline('Digite a quantidade de diarias:');
$consumo_interno = (float) readline('Digite o valor utilizado em consumos dentro do apartamento:');

$valor_diaria = 0.00;
$descricao_ap = "";

switch (strtoupper($tipo_apartamento)) {
    case 'A':
        $valor_diaria = 150.00;
        $descricao_ap = "Apartamento A (R$ 150,00/diária)";
        break;
    case 'B':
        $valor_diaria = 100.00;
        $descricao_ap = "Apartamento B (R$ 100,00/diária)";
        break;
    case 'C':
        $valor_diaria = 75.00;
        $descricao_ap = "Apartamento C (R$ 75,00/diária)";
        break;
    case 'D':
        $valor_diaria = 50.00;
        $descricao_ap = "Apartamento D (R$ 50,00/diária)";
        break;
    default:
        die("Tipo de apartamento inválido! Escolha A, B, C ou D.");
}

$total_diarias = $quantidade_diarias * $valor_diaria;
$subtotal = $total_diarias + $consumo_interno;
$taxa_servico = $subtotal * 0.10;
$total_geral = $subtotal + $taxa_servico;

print("\n" . "FATURA DETALHADA DO HOTEL\n");
print("Hóspede:{$nome}\n");
echo "Acomodação:{$descricao_ap}\n";
echo "Diárias:{$quantidade_diarias} diária(s)\n";
print('Valor Unitário: R$ ' . $valor_diaria . "\n");
print('Total Diárias:  R$ ' . $total_diarias . "\n");
print('Consumo Interno:R$ ' . $consumo_interno . "\n");
print('Subtotal:       R$ ' . $subtotal . "\n");
print('Taxa de Serviço(10%): R$ ' . $taxa_servico . "\n");
print("TOTAL GERAL:    R$ " . $total_geral . "\n");

/*Resumindo: Calcula a conta de um hóspede de hotel. O programa lê o nome, o tipo de apartamento (A, B, C ou D),
a quantidade de diárias e o consumo interno. Um switch define o valor da diária, que é R$ 150, 100, 75 ou 50. Se o tipo for inválido,
o programa é encerrado. Depois calcula o total das diárias, o subtotal, a taxa de serviço de 10% e o total geral, e exibe a fatura detalhada.

*/

?>
