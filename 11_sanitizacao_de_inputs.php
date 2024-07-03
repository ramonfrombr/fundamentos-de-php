<?php
/* --- Sanitização de Entradas -- */

/*
  Os dados enviados por um formulário não são sanitizados por padrão. Temos métodos para sanitizar os dados manualmente.
*/

if (isset($_POST['submit'])) {
  // $name = $_POST['email'];
  // $email = $_POST['email'];

  // htmlspecialchars() - Converte caracteres especiais para entidades HTML
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Sanitizar dados
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitizar entradas
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // FILTER_SANITIZE_STRING - Converte string para string com apenas alfanuméricos, espaços em branco e os seguintes caracteres - _.:/
  // FILTER_SANITIZE_EMAIL - Converte string para um endereço de e-mail válido
  // FILTER_SANITIZE_URL - Converte string para uma URL válida
  // FILTER_SANITIZE_NUMBER_INT - Converte string para um número inteiro
  // FILTER_SANITIZE_NUMBER_FLOAT - Converte string para um número decimal
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - Codifica em HTML caracteres especiais, mantém espaços e a maioria dos outros caracteres
} ?>

<!-- Passar dados por um formulário -->
<!-- php_self pode ser usado para xss -->
<form action="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
  <label>Nome: </label>
  <input type="text" name="name">
</div>
<br>
<?php echo $email; ?>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Enviar">
</form>
