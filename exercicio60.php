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
Descritivo: 60: Escreva um programa conceitual que leia a quantidade de habitantes de uma cidade de
forma que o programa se prepare para ler a idade de cada morador e calcular a média.
*******************************************************************************/

$quantidade = (int) readline("Digite a quantidade de habitantes: ");

if ($quantidade > 0) {
    $soma_idades = 0;

    for ($i = 1; $i <= $quantidade; $i++) {
        $idade = (int) readline("Digite a idade do morador $i: ");
        $soma_idades = $soma_idades + $idade;
    }

    $media = $soma_idades / $quantidade;
    echo "A média de idade dos moradores é: " . number_format($media, 2, ',', '.') . "\n";
} else {
    echo "A quantidade de habitantes deve ser maior que zero.\n";
}

/******************************************************************************

Resumindo: o programa pede a quantidade de habitantes com o readline, usa o for
para pedir a idade de cada morador, soma as idades e divide pela quantidade
para mostrar a média.

*******************************************************************************/
?>
