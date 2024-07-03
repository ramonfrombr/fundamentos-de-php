<?php
/* ------------ Funções ----------- */

/*
** Sintaxe de Função
  function nomeDaFuncao($arg1, $arg2, ...) {
    // código a ser executado
  }

  - As funções têm seu próprio escopo local, ao contrário do escopo global
*/

function registrarUsuario()
{
  echo 'Usuário foi registrado!';
}

// Executando uma função
registrarUsuario();

// Adicionando parâmetros
function registrarUsuario2($nomeDeUsuário)
{
  echo "O usuário ${nomeDeUsuário} foi registrado!";
}

// Passando um argumento
registrarUsuario2('Brad');

// Retornando valores
function adicionar($num1, $num2)
{
  return $num1 + $num2;
}

$soma = adicionar(5, 5);
echo $soma;

// Adicionando valores padrão
function subtrair($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtrair();

// Atribuindo funções anônimas a variáveis. frequentemente usado para closures e funções de retorno de chamada
$adicionar = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $adicionar(5, 5);

// Funções de seta
$multiplicar = fn($num1, $num2) => $num1 * $num2;

echo $multiplicar(5, 5);
?>
