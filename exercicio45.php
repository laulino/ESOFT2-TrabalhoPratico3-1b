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
Descritivo:Escreva um programa que implemente uma calculadora básica. O programa deve obter dois números reais do teclado e um operador caractere representando a operação matemática desejada ('+', '-', '*' e '/'). Efetue o cálculo e exiba o resultado.
*******************************************************************************/


print('As possiveis operações matematicas são +, -, * e /' . "\n");
$primeiro_numero = (float) readline('Digite o primeiro número:');
$segundo_numero = (float) readline('Digite o segundo número:');
$operacao = (string) readline('Digite um dos operadores matemáticos:');
$resultado = 0;
switch ($operacao) {
    case '+':
        $resultado = $primeiro_numero + $segundo_numero;
        break;
    case '-':
        $resultado = $primeiro_numero - $segundo_numero;
        break;
    case '*':
        $resultado = $primeiro_numero * $segundo_numero;
        break;
    case '/':
        if ($segundo_numero == 0) {
            die("Erro: não é possível dividir por zero.");
        }
        $resultado = $primeiro_numero / $segundo_numero;
        break;
    default:
        die("Operadores inválidos! Escolha +, -, * ou /.");
}
print('O resultado do do calculo é: ' . $resultado)

/*Resumindo: É uma calculadora básica. Lê dois números reais e um operador (+, -, * ou /),
faz a operação com switch e exibe o resultado. Se o operador for inválido, o programa é encerrado com uma mensagem de erro*/

?>
