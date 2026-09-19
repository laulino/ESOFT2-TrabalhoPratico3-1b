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
Descritivo: Escreva um programa que leia o ano de nascimento e o ano atual, calcule a idade e classifique o nadador de acordo com sua faixa etária.
*******************************************************************************/

echo "Digite o ano de nascimento: ";
$ano_nascimento = (int) readline();

echo "Digite o ano atual: ";
$ano_atual = (int) readline();

$idade = $ano_atual - $ano_nascimento;

if ($idade >= 0 && $idade <= 4) {
    echo "Categoria: Não aceito";
} elseif ($idade >= 5 && $idade <= 7) {
    echo "Categoria: Infantil A";
} elseif ($idade >= 8 && $idade <= 10) {
    echo "Categoria: Infantil B";
} elseif ($idade >= 11 && $idade <= 13) {
    echo "Categoria: Juvenil A";
} elseif ($idade >= 14 && $idade <= 17) {
    echo "Categoria: Juvenil B";
} else {
    echo "Categoria: Sênior";
}

/******************************************************************************
Foram criadas variáveis para armazenar o ano de nascimento e o ano atual informados pelo usuário. Em seguida, foi calculada a idade do nadador utilizando a diferença entre o ano atual e o ano de nascimento.
Depois, foram utilizadas as estruturas if, elseif e else para verificar a idade e definir a categoria correspondente, de acordo com as faixas etárias apresentadas no enunciado. 
Por fim, foi utilizado o echo para exibir a categoria do nadador.
*******************************************************************************/
?>