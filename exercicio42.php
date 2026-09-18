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
Descritivo: Escreva um programa que leia um número inteiro e informe se ele é divisível por 3 e por 7
simultaneamente.
*******************************************************************************/

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 3 == 0 && $numero % 7 == 0) {
    echo "O número é divisível por 3 e por 7 simultaneamente.";
} else {
    echo "O número não é divisível por 3 e por 7 simultaneamente.";
}

/*
No exercício 42, o programa lê um número inteiro e verifica se ele é divisível por 3 e por 7 simultaneamente. Se for, exibe uma mensagem indicando que o número é divisível por ambos, caso contrário, exibe uma mensagem indicando que não é  divisível por ambos. 
Para realizar o que se pede no enunciado, utilizei a função `fgets(STDIN)` para ler a entrada do  usuário, convertendo-a para um inteiro com `(int)`. Em seguida, utilizei o operador de módulo `%` para verificar a divisibilidade do número por 3 e por 7. O programa então imprime a mensagem apropriada com base na condição avaliada. 
E usei a estrutura condicional `if` para verificar se o número é divisível por 3 e por 7 simultaneamente, utilizando o operador lógico `&&` para combinar as duas condições e else caso o número não seja divisível por ambos. 
*/
?>