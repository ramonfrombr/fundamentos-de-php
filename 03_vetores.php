<?php
/* ----------- Arrays ----------- */

/*
  Se você precisa armazenar múltiplos valores, você pode usar arrays. Arrays contêm "elementos"
*/

// Array simples de números
$números = [1, 2, 3, 4, 5];

// Array simples de strings
$cores = ['vermelho', 'azul', 'verde'];

// Usando a função array para criar um array de números
$números = [1, 2, 3, 4, 5];

// Exibindo valores de um array
echo $números[0];
echo $números[3] + $números[4];

// Podemos usar print_r ou var_dump para ver o conteúdo de um array
var_dump($números);

/* ------ Arrays Associativos ----- */

/*
  Arrays associativos permitem usar chaves nomeadas para identificar valores.
*/

$cores = [
  1 => 'vermelho',
  2 => 'verde',
  3 => 'azul',
];

// echo $cores[1];

// Strings como chaves
$hex = [
  'vermelho' => '#f00',
  'verde' => '#0f0',
  'azul' => '#00f',
];

echo $hex['vermelho'];
var_dump($hex);

/* ---- Arrays Multidimensionais ---- */

/*
  Arrays multidimensionais são frequentemente usados para armazenar dados em um formato de tabela.
*/

// Única pessoa
$pessoa1 = [
  'primeiro_nome' => 'Brad',
  'sobrenome' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array de pessoas
$pessoas = [
  $pessoa1, //   [...$pessoa1]
  [
    'primeiro_nome' => 'John',
    'sobrenome' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'primeiro_nome' => 'Jane',
    'sobrenome' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($pessoas);

// Acessando valores em um array multidimensional
echo $pessoas[0]['primeiro_nome'];
echo $pessoas[2]['email'];

// Codificar para JSON
var_dump(json_encode($pessoas));

// Decodificar de JSON
$jsonobj = '{"primeiro_nome":"Brad","sobrenome": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));
?>
