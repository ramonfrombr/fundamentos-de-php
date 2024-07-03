<?php

/* ---------- Manipulação de Arquivos --------- */

/* 
  Manipulação de arquivos é a capacidade de ler e escrever arquivos no servidor.
  O PHP possui funções integradas para leitura e escrita de arquivos.
*/

$file = 'extras/users.txt';

// if(file_exists($file)) {
//   // Retorna o conteúdo e o número de bytes lidos do arquivo em caso de sucesso, ou FALSE em caso de falha.
//   echo readfile('extras/users.txt');
// }

// Abrir, Ler, Escrever, Fechar um arquivo
if (file_exists($file)) {
  // fopen() fornece mais controle sobre o arquivo.
  // Modos: r, w, a, x, r+, w+, a+, x+ Veja abaixo para detalhes
  $handle = fopen($file, 'r');
  // fread() lê o arquivo e retorna o conteúdo como uma string em caso de sucesso, ou FALSE em caso de falha.
  $contents = fread($handle, filesize($file));
  // fclose() fecha o recurso do arquivo em caso de sucesso, ou FALSE em caso de falha.
  fclose($handle);
  echo $contents;
} else {
  // Criar o arquivo
  $handle = fopen($file, 'w');
  // PHP_EOL é uma constante que representa o caractere de fim de linha.
  $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John';
  // fwrite() escreve o conteúdo no arquivo e retorna o número de bytes escritos em caso de sucesso, ou FALSE em caso de falha.
  fwrite($handle, $contents);
  fclose($handle);
}

/*
r	- Abre um arquivo para leitura apenas. O ponteiro do arquivo começa no início do arquivo
w	- Abre um arquivo para escrita apenas. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir. O ponteiro do arquivo começa no início do arquivo
a	- Abre um arquivo para escrita apenas. Os dados existentes no arquivo são preservados. O ponteiro do arquivo começa no final do arquivo. Cria um novo arquivo se o arquivo não existir
x	- Cria um novo arquivo para escrita apenas. Retorna FALSE e um erro se o arquivo já existir
r+ -	Abre um arquivo para leitura/escrita. O ponteiro do arquivo começa no início do arquivo
w+ -	Abre um arquivo para leitura/escrita. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir. O ponteiro do arquivo começa no início do arquivo
a+ -	Abre um arquivo para leitura/escrita. Os dados existentes no arquivo são preservados. O ponteiro do arquivo começa no final do arquivo. Cria um novo arquivo se o arquivo não existir
x+	- Cria um novo arquivo para leitura/escrita. Retorna FALSE e um erro se o arquivo já existir
*/
?>
