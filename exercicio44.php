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
Descritivo: Escreva um programa que leia o ano de nascimento e o ano atual, verifique se o ano de nascimento é válido e exiba a idade calculada.
*******************************************************************************/

echo "Digite o ano de nascimento: ";
$ano_nascimento = (int) readline();

echo "Digite o ano atual: ";
$ano_atual = (int) readline();

if ($ano_nascimento > 1900 && $ano_nascimento <= $ano_atual) {
    $idade = $ano_atual - $ano_nascimento;

    echo "Idade = " . $idade . " anos";
} else {
    echo "Ano de nascimento inválido.";
}

/******************************************************************************
Foram criadas variáveis para armazenar o ano de nascimento e o ano atual informados pelo usuário. 
Em seguida, foi utilizada uma estrutura if para verificar se o ano de nascimento é maior que 1900 e menor ou igual ao ano atual. 
Caso o ano seja válido, foi calculada a idade por meio da diferença entre o ano atual e o ano de nascimento. Por fim, foi utilizado o echo para exibir a idade ou informar que o ano de nascimento é inválido.
*******************************************************************************/
?>