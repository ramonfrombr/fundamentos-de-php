<?php

/* ----- Variáveis e Tipos de Dados ----- */

/* --------- Tipos de Dados em PHP --------- */
/*
- String - Uma string é uma série de caracteres cercados por aspas
- Integer - Números inteiros
- Float - Números decimais
- Boolean - verdadeiro ou falso
- Array - Uma matriz é uma variável especial, que pode conter mais de um valor
- Object - Uma classe
- NULL - Variável vazia
- Resource - Uma variável especial que contém um recurso
*/

/* --------- Regras de Variáveis --------- */
/*
- Variáveis devem ser prefixadas com $
- As variáveis devem começar com uma letra ou o caractere de sublinhado
- as variáveis não podem começar com um número
- As variáveis só podem conter caracteres alfanuméricos e sublinhados (A-z, 0-9 e _ )
- Variáveis são sensíveis a maiúsculas e minúsculas ($nome e $NOME são duas variáveis diferentes)
*/

$nome = 'Brad'; // String // Pode ser aspas simples ou duplas
$idade = 40; // Integer
$temFilhos = true; // Booleano
$dinheiroEmMaos = 10.5; // Float

var_dump($dinheiroEmMaos);

/* --- Adicionando variáveis a strings -- */

// Aspas duplas podem ser usadas para adicionar variáveis a strings
echo "$nome tem $idade anos de idade";

// Melhor fazer assim
echo "${nome} tem ${idade} anos de idade";

// Concatenar Strings

echo '<h3>' . $nome . ' tem ' . $idade . ' anos de idade</h3>';

// Operadores Aritméticos

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

// Constantes - Não podem ser alteradas
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);
