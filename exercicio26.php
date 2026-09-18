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
Descritivo: 26: Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e depois da troca.
*******************************************************************************/

$A = (int) readline ("Digite o primeiro número: ");
$B = (int) readline ("Digite o segundo número: ");

echo "TROCA DE CONTEÚDO \n";
echo "Antes \n";
echo "A= " . $A . "\n";
echo "B= " . $B . "\n";

$temp = $A;
$A = $B;
$B = $temp;

echo "Depois \n";
echo "A= " . $A . "\n";
echo "B= " . $B . "\n";

/******************************************************************************
Primeiramente, foram criadas duas variáveis, A e B, foi exibido o valor de cada uma antes da troca ser feita.
Depois, foi criada uma variável para guardar o valor de A para poder fazer a troca sem perder nenhum dos valores. Assim, a variável temporária recebe o valor de A, a variável A recebe o valor de B e, por último, B recebe o valor que está armazenada na variável temporária, que anteriormente era o valor de A.
No final é exibido os valores trocados. Ou seja, nesse código o conteúdo que estava nas variáveis foi realmente trocado, e não só exibido invertido.
*******************************************************************************/
?>