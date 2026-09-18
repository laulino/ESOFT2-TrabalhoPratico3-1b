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
Descritivo: 51: Escreva um programa que leia as três notas obtidas por um aluno. Calcule e exiba a média aritmética simples baseada apenas nas duas maiores notas obtidas.
*******************************************************************************/

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

if ($nota1 <= $nota2 && $nota1 <= $nota3) {
    $media = ($nota2 + $nota3) / 2;
} elseif ($nota2 <= $nota1 && $nota2 <= $nota3) {
    $media = ($nota1 + $nota3) / 2;
} else {
    $media = ($nota1 + $nota2) / 2;
}

echo "A média das duas maiores notas é: " . $media;

/******************************************************************************
Foram criadas três variáveis para armazenar as notas digitadas pelo usuário.
Depois, foram utilizadas estruturas condicionais para verificar qual das três notas é a menor. Em seguida, foi calculada a média utilizando apenas as duas maiores notas.
O resultado foi exibido na tela utilizando o comando echo.
*******************************************************************************/
?>