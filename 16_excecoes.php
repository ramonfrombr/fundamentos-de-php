<?php

/* ----------- Exceções ----------- */

/*
  O PHP possui um modelo de exceções semelhante ao de outras linguagens de programação. Uma exceção pode ser lançada e capturada ("catched") dentro do PHP. O código pode ser envolto em um bloco try para facilitar a captura de exceções potenciais. Cada bloco try deve ter pelo menos um bloco catch ou finally correspondente.
*/

function inverse($x) {
  if (!$x) {
    throw new Exception('Divisão por zero.');
  }
  return 1/$x;
}

// echo inverse(0); // Causa uma exceção a ser lançada e interrompe a execução do script

// Trata a exceção
// try {
//   echo inverse(5) . ' ';
//   echo inverse(0) . ' '";
// } catch (Exception $e) {
//   echo 'Exceção capturada: ',  $e->getMessage(), ' ';
// }

// O bloco Finally é executado independentemente de uma exceção ser lançada ou não

try {
  echo inverse(5) . ' ';
} catch (Exception $e) {
  echo 'Exceção capturada: ',  $e->getMessage(), ' ';
} finally {
  echo 'Primeiro finally ';
}

try {
  echo inverse(0) . ' ';
} catch (Exception $e) {
  echo 'Exceção capturada: ',  $e->getMessage(), ' ';
} finally {
  echo "Segundo finally ";
}


echo 'Olá Mundo';
?>
