<?php
/* ---------- Funções de String -------- */

/*
  Funções para trabalhar com strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Olá Mundo';

// Obter o comprimento de uma string
echo strlen($string);

// Encontrar a posição da primeira ocorrência de uma substring em uma string
echo strpos($string, 'o');

// Encontrar a posição da última ocorrência de uma substring em uma string
echo strrpos($string, 'o');

// Inverter uma string
echo strrev($string);

// Converter todos os caracteres para minúsculas
echo strtolower($string);

// Converter todos os caracteres para maiúsculas
echo strtoupper($string);

// Maiúscula a primeira letra de cada palavra
echo ucwords($string);

// Substituir string
echo str_replace('Mundo', 'todos', $string);

// Retornar parte de uma string especificada pelo deslocamento e comprimento
echo substr($string, 0, 5);
echo substr($string, 5);

// Começa com
if (str_starts_with($string, 'Olá')) {
  echo 'SIM';
}

// Termina com
if (str_ends_with($string, 'do')) {
  echo 'SIM';
}

// Entidades HTML
$string2 = '<h1>Olá Mundo</h1>';
echo htmlentities($string2);

// Strings formatadas - úteis quando você tem dados externos
// Diferentes especificadores para diferentes tipos de dados
printf('%s é um %s', 'Brad', 'cara legal');
printf('1 + 1 = %f', 1 + 1); // float
?>
