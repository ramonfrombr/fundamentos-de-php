<?php
/* --------- Funções de Array -------- */

/*
  Funções para trabalhar com arrays
  https://www.php.net/manual/en/ref.array.php
*/

$frutas = ['maçã', 'banana', 'laranja'];

// Obter comprimento do array
echo count($frutas);

// Procurar no array
echo in_array('banana', $frutas);

// Adicionar a um array
$frutas[] = 'uva';
array_push($frutas, 'manga', 'framboesa');
array_unshift($frutas, 'kiwi'); // Adiciona no início

// Remover do array
array_pop($frutas); // Remove o último
array_shift($frutas); // Remove o primeiro
// Remover elemento específico
unset($frutas[2]);

// Dividir em pedaços de 2
$arrayDividido = array_chunk($frutas, 2);
var_dump($arrayDividido);

// Concatenar arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Usar Spread
var_dump($arr4);

// Combinar arrays (chaves e valores)
$a = ['verde', 'vermelho', 'amarelo'];
$b = ['abacate', 'maçã', 'banana'];
$c = array_combine($a, $b);

// Array de chaves
$chaves = array_keys($c);

// Inverter chaves com valores
$invertido = array_flip($c);
var_dump($invertido);

// Criar array de números com range()
$números = range(1, 20);

// Mapear através do array e criar um novo
$novosNúmeros = array_map(function ($número) {
  return "Número ${número}";
}, $números);

// Filtrar array
$menorQue10 = array_filter($números, fn($número) => $número < 10);

// Reduzir array
// "carry" mantém o valor de retorno da iteração anterior
$soma = array_reduce($números, fn($acumulador, $número) => $acumulador + $número);
var_dump($soma);
?>
