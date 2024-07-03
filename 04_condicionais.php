<?php

/* ---- Condicionais e Operadores ---- */

/* ------------ Operadores ----------- */

/*
  < Menor que
  > Maior que
  <= Menor ou igual a
  >= Maior ou igual a
  == Igual a
  === Idêntico a
  != Diferente de
  !== Não idêntico a
*/

/* ---------- Declarações If --------- */

/*
** Sintaxe da Declaração If
if (condição) {
  // código a ser executado se a condição for verdadeira
}
*/

$idade = 20;

if ($idade >= 18) {
  echo 'Você tem idade suficiente para votar!';
} else {
  echo 'Desculpe, você é muito jovem para votar.';
}

// Datas
// $hoje = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo 'Tenha uma boa manhã!';
} elseif ($t < 17) {
  echo 'Tenha uma boa tarde!';
} else {
  echo 'Tenha uma boa noite!';
}

// Verificar se um array está vazio
// A função isset() irá gerar um aviso ou e-notice quando a variável não existir. A função empty() não gerará nenhum aviso ou e-notice quando a variável não existir.

$postagens = [];

if (!empty($postagens[0])) {
  echo $postagens[0];
} else {
  echo 'Não há postagens';
}

/* -------- Operador Ternário -------- */
/*
  O operador ternário é uma forma abreviada de uma declaração if.
  Sintaxe Ternária:
    condição ? verdadeiro : falso;
*/

// Exibir com base em uma condição (igual ao exemplo anterior)
echo !empty($postagens[0]) ? $postagens[0] : 'Não há postagens';

// Atribuir uma variável com base em uma condição
$primeiraPostagem = !empty($postagens[0]) ? $postagens[0] : 'Não há postagens';

$primeiraPostagem = !empty($postagens[0]) ? $postagens[0] : null;

// Operador de Fusão de Nulidade ?? (PHP 7.4)
// Irá retornar null se $postagens estiver vazio
// Sempre retorna o primeiro parâmetro, a menos que o primeiro parâmetro seja NULL
$primeiraPostagem = $postagens[0] ?? null;

var_dump($primeiraPostagem);

/* -------- Declarações Switch ------- */

$corfavorita = 'vermelho';

switch ($corfavorita) {
  case 'vermelho':
    echo 'Sua cor favorita é vermelho!';
    break;
  case 'azul':
    echo 'Sua cor favorita é azul!';
    break;
  case 'verde':
    echo 'Sua cor favorita é verde!';
    break;
  default:
    echo 'Sua cor favorita não é vermelho, azul, nem verde!';
}
?>
