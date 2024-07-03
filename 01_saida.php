<?php // Este é uma tag php. Se não houver html ou outro conteúdo abaixo do php, não precisamos fechar a tag php.

/* ------- Exibindo Conteúdo ------- */

// Echo - Exibe strings, números, html, etc
echo 'Olá';
echo 123;
echo '<h1>Olá</h1>';

// print - Similar ao echo, mas um pouco mais lento
print 'Olá';

// print_r - Fornece um pouco mais de informações. Pode ser usado para imprimir arrays
print_r('Olá');
print_r([1, 2, 3]);

// var_dump - Ainda mais informações como tipo de dados e comprimento
var_dump('Olá');
var_dump([1, 2, 3]);

// Escapando caracteres com uma barra invertida
echo "Seu nome é O\'reilly?";

/* ------------ Comentários ------------ */

// Este é um comentário de uma linha

/*
* Este é um comentário de várias linhas
*
* Pode ser usado para comentar um bloco de código
*/

// Se houver mais conteúdo após o PHP, como este arquivo, você precisa da tag de fechamento. Caso contrário, não precisa.
?>

<!-- Você pode exibir qualquer HTML que desejar dentro de um arquivo .php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Site PHP</title>
</head>
<body>
  <!-- Você pode exibir PHP, incluindo variáveis, etc -->
  <h1>Olá <?php echo 'Brad'; ?></h1>
  <!-- Você pode deixar de fora o ponto e vírgula após uma declaração somente quando a declaração for imediatamente seguida por uma tag PHP de fechamento ?>. -->
  <h1>Olá <?= 'Brad' ?></h1>
</body>
</html>
