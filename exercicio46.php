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
Descritivo: 46: Escreva um programa que leia a sigla do estado onde uma pessoa nasceu e informe se ela é carioca, paulista, mineira ou de outro estado (outros).
*******************************************************************************/

$estado = strtoupper(readline("Digite a sigla do estado onde nasceu: "));

switch ($estado) {
    case "RJ":
        echo "Você é carioca.";
    break;
    case "SP":
        echo "Você é paulista.";
    break;
    case "MG":
        echo "Você é mineira.";
    break;
    default:
        echo "Você é de outro estado.";
    break;
}

/******************************************************************************
Foi criada uma variável para armazenar a sigla do estado digitada pelo usuário. Também foi usado o strtoupper, para evitar erros se a sigla fosse digitada em letras minúsculas, porque converte todos os caracteres para maiúsculas.
Foi utilizado o switch para verificar a sigla informada e identificar se a pessoa é carioca, paulista, mineira ou de outro estado.
E foi utilizado o echo para exibir a mensagem correspondente ao estado.
*******************************************************************************/
?>