<?php
/* ---------- Superglobais ---------- */
// Variáveis internas que estão sempre disponíveis em todos os escopos

/*
  $GLOBALS - Uma variável superglobal que contém informações sobre todas as variáveis no escopo global.
  $_GET - Contém informações sobre variáveis passadas por uma URL ou um formulário.
  $_POST - Contém informações sobre variáveis passadas por um formulário.
  $_COOKIE - Contém informações sobre variáveis passadas por um cookie.
  $_SESSION - Contém informações sobre variáveis passadas por uma sessão.
  $_SERVER - Contém informações sobre o ambiente do servidor.
  $_ENV - Contém informações sobre as variáveis de ambiente.
  $_FILES - Contém informações sobre arquivos enviados para o script.
  $_REQUEST - Contém informações sobre variáveis passadas pelo formulário ou URL.
*/

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>
