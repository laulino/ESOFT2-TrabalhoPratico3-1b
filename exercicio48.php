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
Descritivo: Escreva um programa que leia três números reais e exiba o maior deles.
*******************************************************************************/

$numero1 = (float) readline("Digite o primeiro número real: ");
$numero2 = (float) readline("Digite o segundo número real: ");
$numero3 = (float) readline("Digite o terceiro número real: ");

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $maior = $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $maior = $numero2;
} else {
    $maior = $numero3;
}

echo "O maior número é: $maior\n";

/*
Para resorlver o enunciado do exercício 48, utilizei a estrutura condicional if-else para comparar os três números reais fornecidos pelo usuário. O programa lê os três
números, verifica qual deles é o maior e, em seguida, exibe o resultado na tela. Também utilizei o = para atribuir valores para as variáveis $numero1, $numero2 e 
$numero3, e o operador >= para comparar os números. O operador lógico && é usado para verificar múltiplas condições. O resultado final é exibido usando a função echo. 
*/
?>