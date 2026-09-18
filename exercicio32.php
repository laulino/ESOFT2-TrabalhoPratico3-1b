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
Descritivo: 32: Escreva um programa que leia um número real e informe se ele é positivo, negativo ou nulo.
*******************************************************************************/

$nreal = (float) readline ("Digite um número: ");

if ($nreal > 0) {
    echo "O número " . $nreal . " é positivo.";
}elseif ($nreal < 0) {
    echo "O número " . $nreal . " é negativo.";
}else {
    echo "O número " . $nreal . " é nulo.";
}

/******************************************************************************
Foi criada uma variável chamada $nreal para guardar o número digitado. Foi utilizado o comando readline para permitir a entrada de um valor, e o (float) para converter o valor digitado em um número real.
Em seguida, foram utilizadas estruturas condicionais para verificar se o número é positivo, negativo ou nulo.
Por fim, foi exibido a classificação do número informado.
*******************************************************************************/
?>