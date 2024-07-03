<?php

/* -------- Laços & Iterações ------- */

/* ------------ Loop For ------------ */

/*
** Sintaxe do Loop For
  for (inicialização; condição; incremento) {
  // código a ser executado
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Número: $x <br>";
}

/* ------------ Loop While ------------ */

/*
** Sintaxe do Loop While
  while (condição) {
  // código a ser executado
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Número: $x <br>";
  $x++;
}

/* ---------- Loop Do While --------- */

/*
** Sintaxe do Loop Do While
  do {
  // código a ser executado
  } while (condição);

O loop do...while sempre executará o bloco de código uma vez, mesmo se a condição for falsa.
*/

do {
  echo "Número: $x <br>";
  $x++;
} while ($x <= 5);

/* ---------- Loop Foreach ---------- */

/*
** Sintaxe do Loop Foreach
  foreach ($array as $valor) {
  // código a ser executado
  }
*/

// Percorrer um array

$números = [1, 2, 3, 4, 5];

foreach ($números as $x) {
  echo "Número: $x <br>";
}

// Use os índices dentro do loop

$postagens = ['Postagem Um', 'Postagem Dois', 'Postagem Três'];

foreach ($postagens as $índice => $postagem) {
  echo "${índice} - ${postagem} <br>";
}

// Use as chaves dentro do loop para um array associativo

$pessoa = [
  'primeiro_nome' => 'Brad',
  'sobrenome' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Obter chaves
foreach ($pessoa as $chave => $valor) {
  echo "${chave} - ${valor} <br>";
}
?>
